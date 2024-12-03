<?php

namespace Container1wPQA2K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UfLKOtBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UfLKOtB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UfLKOtB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Api\\TaskController::create' => ['privates', '.service_locator.axWvN5H.App\\Controller\\Api\\TaskController::create()', 'getTaskControllercreateService', true],
            'App\\Controller\\Api\\TaskController::update' => ['privates', '.service_locator.yOkfgpG.App\\Controller\\Api\\TaskController::update()', 'getTaskControllerupdateService', true],
            'App\\Controller\\Api\\TaskController::delete' => ['privates', '.service_locator.a.GwWBn.App\\Controller\\Api\\TaskController::delete()', 'getTaskControllerdeleteService', true],
            'App\\Controller\\Api\\TaskController::list' => ['privates', '.service_locator.a.GwWBn.App\\Controller\\Api\\TaskController::list()', 'getTaskControllerlistService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Api\\TaskController:create' => ['privates', '.service_locator.axWvN5H.App\\Controller\\Api\\TaskController::create()', 'getTaskControllercreateService', true],
            'App\\Controller\\Api\\TaskController:update' => ['privates', '.service_locator.yOkfgpG.App\\Controller\\Api\\TaskController::update()', 'getTaskControllerupdateService', true],
            'App\\Controller\\Api\\TaskController:delete' => ['privates', '.service_locator.a.GwWBn.App\\Controller\\Api\\TaskController::delete()', 'getTaskControllerdeleteService', true],
            'App\\Controller\\Api\\TaskController:list' => ['privates', '.service_locator.a.GwWBn.App\\Controller\\Api\\TaskController::list()', 'getTaskControllerlistService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Api\\TaskController::create' => '?',
            'App\\Controller\\Api\\TaskController::update' => '?',
            'App\\Controller\\Api\\TaskController::delete' => '?',
            'App\\Controller\\Api\\TaskController::list' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Api\\TaskController:create' => '?',
            'App\\Controller\\Api\\TaskController:update' => '?',
            'App\\Controller\\Api\\TaskController:delete' => '?',
            'App\\Controller\\Api\\TaskController:list' => '?',
        ]);
    }
}