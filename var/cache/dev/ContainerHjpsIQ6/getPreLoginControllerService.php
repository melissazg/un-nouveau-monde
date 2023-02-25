<?php

namespace ContainerHjpsIQ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPreLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PreLoginController' shared autowired service.
     *
     * @return \App\Controller\PreLoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PreLoginController.php';

        $container->services['App\\Controller\\PreLoginController'] = $instance = new \App\Controller\PreLoginController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PreLoginController', $container));

        return $instance;
    }
}