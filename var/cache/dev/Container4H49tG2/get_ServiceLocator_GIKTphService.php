<?php

namespace Container4H49tG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GIKTphService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gI_KTph' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gI_KTph'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\InscriptionController::create' => ['privates', '.service_locator.Wohwl5R', 'get_ServiceLocator_Wohwl5RService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.otSeFVa', 'get_ServiceLocator_OtSeFVaService', true],
            'App\\Controller\\UserController::editPassword' => ['privates', '.service_locator.cELnjUu', 'get_ServiceLocator_CELnjUuService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\InscriptionController:create' => ['privates', '.service_locator.Wohwl5R', 'get_ServiceLocator_Wohwl5RService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.otSeFVa', 'get_ServiceLocator_OtSeFVaService', true],
            'App\\Controller\\UserController:editPassword' => ['privates', '.service_locator.cELnjUu', 'get_ServiceLocator_CELnjUuService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\InscriptionController::create' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::editPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\InscriptionController:create' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:editPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
