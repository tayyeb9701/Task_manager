<?php

namespace App\Controller\Api;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/tasks')]
class TaskController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    private function handleValidationErrors($errors): JsonResponse
    {
        return new JsonResponse([
            'errors' => (string) $errors
        ], JsonResponse::HTTP_BAD_REQUEST);
    }

    #[Route('', methods: ['POST'])]
    public function create(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (empty($data['title']) || empty($data['description']) || !in_array($data['status'], ['todo', 'in_progress', 'done'])) {
            return new JsonResponse(['error' => 'Invalid input data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $task = new Task();
        $task->setTitle($data['title']);
        $task->setDescription($data['description']);
        $task->setStatus($data['status']);
        $task->setCreatedAt(new \DateTimeImmutable());
        $task->setUpdatedAt(new \DateTimeImmutable());

        $errors = $validator->validate($task);
        if (count($errors) > 0) {
            return $this->handleValidationErrors($errors);
        }

        $this->entityManager->persist($task);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Task created successfully'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/{id}', methods: ['PUT', 'PATCH'])]
    public function update(int $id, Request $request, TaskRepository $repository, ValidatorInterface $validator): JsonResponse
    {
        $task = $repository->find($id);

        if (!$task) {
            return new JsonResponse(['error' => 'Task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['title'])) {
            $task->setTitle($data['title']);
        }
        if (isset($data['description'])) {
            $task->setDescription($data['description']);
        }
        if (isset($data['status'])) {
            $task->setStatus($data['status']);
        }
        $task->setUpdatedAt(new \DateTimeImmutable());

        $errors = $validator->validate($task);
        if (count($errors) > 0) {
            return $this->handleValidationErrors($errors);
        }

        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Task updated successfully']);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(int $id, TaskRepository $repository): JsonResponse
    {
        $task = $repository->find($id);

        if (!$task) {
            return new JsonResponse(['error' => 'Task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($task);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Task deleted successfully']);
    }
}
