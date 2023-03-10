<?php

namespace Container4H49tG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CELnjUuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cELnjUu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cELnjUu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'user' => ['privates', '.errored..service_locator.cELnjUu.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.cELnjUu": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'hasher' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
