<?php

namespace ContainerF7iZ4Os;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qw6utINService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Qw6utIN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Qw6utIN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'film' => ['privates', '.errored..service_locator.Qw6utIN.App\\Entity\\Film', NULL, 'Cannot autowire service ".service_locator.Qw6utIN": it needs an instance of "App\\Entity\\Film" but this type has been excluded in "config/services.yaml".'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'film' => 'App\\Entity\\Film',
            'manager' => '?',
        ]);
    }
}
