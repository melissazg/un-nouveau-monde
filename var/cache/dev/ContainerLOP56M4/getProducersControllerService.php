<?php

namespace ContainerLOP56M4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProducersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProducersController' shared autowired service.
     *
     * @return \App\Controller\ProducersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProducersController.php';

        $container->services['App\\Controller\\ProducersController'] = $instance = new \App\Controller\ProducersController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ProducersController', $container));

        return $instance;
    }
}
