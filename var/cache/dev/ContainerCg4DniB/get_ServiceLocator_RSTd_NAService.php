<?php

<<<<<<<< HEAD:var/cache/dev/ContainerCg4DniB/get_ServiceLocator_RSTd_NAService.php
namespace ContainerCg4DniB;
========
namespace ContainerE3z86jQ;
>>>>>>>> panier:var/cache/dev/ContainerE3z86jQ/get_ServiceLocator_RSTd_NAService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RSTd_NAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rSTd.nA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rSTd.nA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'authenticationUtils' => '?',
        ]);
    }
}
