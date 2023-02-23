<?php

namespace ContainerBeKqbJV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKarserRecaptcha3_Form_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'karser_recaptcha3.form.type' shared service.
     *
     * @return \Karser\Recaptcha3Bundle\Form\Recaptcha3Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/karser/karser-recaptcha3-bundle/Form/Recaptcha3Type.php';

        return $container->privates['karser_recaptcha3.form.type'] = new \Karser\Recaptcha3Bundle\Form\Recaptcha3Type($container->getEnv('RECAPTCHA3_KEY'), 'www.google.com', true);
    }
}
