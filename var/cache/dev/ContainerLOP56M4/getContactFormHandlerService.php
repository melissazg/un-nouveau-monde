<?php

namespace ContainerLOP56M4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactFormHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FormHandler\ContactFormHandler' shared autowired service.
     *
     * @return \App\Form\FormHandler\ContactFormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Form/FormHandler/ContactFormHandler.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Form\\FormHandler\\ContactFormHandler'])) {
            return $container->privates['App\\Form\\FormHandler\\ContactFormHandler'];
        }

        return $container->privates['App\\Form\\FormHandler\\ContactFormHandler'] = new \App\Form\FormHandler\ContactFormHandler($a);
    }
}
