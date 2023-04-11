<?php

namespace ContainerTYRkN7a;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInscriptionFormHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FormHandler\InscriptionFormHandler' shared autowired service.
     *
     * @return \App\Form\FormHandler\InscriptionFormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'FormHandler'.\DIRECTORY_SEPARATOR.'InscriptionFormHandler.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Form\\FormHandler\\InscriptionFormHandler'])) {
            return $container->privates['App\\Form\\FormHandler\\InscriptionFormHandler'];
        }

        return $container->privates['App\\Form\\FormHandler\\InscriptionFormHandler'] = new \App\Form\FormHandler\InscriptionFormHandler($a);
    }
}
