<?php

namespace Container1wPQA2K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.axWvN5H.App\Controller\Api\TaskController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.axWvN5H.App\\Controller\\Api\\TaskController::create()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'validator' => '?',
        ]))->withContext('App\\Controller\\Api\\TaskController::create()', $container);
    }
}
