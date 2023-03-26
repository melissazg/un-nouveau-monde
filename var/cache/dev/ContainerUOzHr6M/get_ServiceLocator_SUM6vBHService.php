<?php

namespace ContainerUOzHr6M;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SUM6vBHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sUM6vBH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sUM6vBH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'film' => ['privates', '.errored..service_locator.sUM6vBH.App\\Entity\\Film', NULL, 'Cannot autowire service ".service_locator.sUM6vBH": it needs an instance of "App\\Entity\\Film" but this type has been excluded in "config/services.yaml".'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
            'film' => 'App\\Entity\\Film',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
