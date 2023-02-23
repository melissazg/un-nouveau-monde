<?php

namespace Container9MtdtxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M3Hz4jJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m3Hz4jJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m3Hz4jJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\AppAuthenticator', 'getAppAuthenticatorService', true],
            'inscriptionFormHandler' => ['privates', 'App\\Form\\FormHandler\\InscriptionFormHandler', 'getInscriptionFormHandlerService', true],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
        ], [
            'authenticator' => 'App\\Security\\AppAuthenticator',
            'inscriptionFormHandler' => 'App\\Form\\FormHandler\\InscriptionFormHandler',
            'passwordHasher' => '?',
            'userAuthenticator' => '?',
        ]);
    }
}
