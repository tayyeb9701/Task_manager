<?php

namespace Container1wPQA2K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\TaskController' shared autowired service.
     *
     * @return \App\Controller\Api\TaskController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/TaskController.php';

        return $container->services['App\\Controller\\Api\\TaskController'] = new \App\Controller\Api\TaskController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
