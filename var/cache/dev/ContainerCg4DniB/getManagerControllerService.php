<?php

<<<<<<<< HEAD:var/cache/dev/ContainerCg4DniB/getManagerControllerService.php
namespace ContainerCg4DniB;
========
namespace ContainerE3z86jQ;
>>>>>>>> panier:var/cache/dev/ContainerE3z86jQ/getManagerControllerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ManagerController' shared autowired service.
     *
     * @return \App\Controller\ManagerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ManagerController.php';

        $container->services['App\\Controller\\ManagerController'] = $instance = new \App\Controller\ManagerController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ManagerController', $container));

        return $instance;
    }
}
