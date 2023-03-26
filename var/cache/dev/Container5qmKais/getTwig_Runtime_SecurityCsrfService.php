<?php

namespace Container5qmKais;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_SecurityCsrfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfRuntime.php';

        return $container->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($container->privates['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')));
    }
}
