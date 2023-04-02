<?php

namespace ContainerU1XApYi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\SendMailService' shared autowired service.
     *
     * @return \App\Service\SendMailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SendMailService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\SendMailService'])) {
            return $container->privates['App\\Service\\SendMailService'];
        }

        return $container->privates['App\\Service\\SendMailService'] = new \App\Service\SendMailService($a);
    }
}