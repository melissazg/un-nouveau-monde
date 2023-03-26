<?php

namespace ContainerLpt7n6P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartnersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PartnersController' shared autowired service.
     *
     * @return \App\Controller\PartnersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PartnersController.php';

        $container->services['App\\Controller\\PartnersController'] = $instance = new \App\Controller\PartnersController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PartnersController', $container));

        return $instance;
    }
}