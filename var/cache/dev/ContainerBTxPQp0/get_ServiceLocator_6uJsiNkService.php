<?php

namespace ContainerBTxPQp0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6uJsiNkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6uJsiNk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6uJsiNk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactFormHandler' => ['privates', '.errored..service_locator.6uJsiNk.App\\FormHandler\\ContactFormHandler', NULL, 'Cannot autowire service ".service_locator.6uJsiNk": it references class "App\\FormHandler\\ContactFormHandler" but no such service exists.'],
        ], [
            'contactFormHandler' => 'App\\FormHandler\\ContactFormHandler',
        ]);
    }
}