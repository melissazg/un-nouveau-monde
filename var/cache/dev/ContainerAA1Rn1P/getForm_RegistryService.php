<?php

namespace ContainerAA1Rn1P;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\CommentType' => ['privates', 'App\\Form\\CommentType', 'getCommentTypeService', true],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', true],
            'App\\Form\\FilmType' => ['privates', 'App\\Form\\FilmType', 'getFilmTypeService', true],
            'App\\Form\\FilterType' => ['privates', 'App\\Form\\FilterType', 'getFilterTypeService', true],
            'App\\Form\\InscriptionType' => ['privates', 'App\\Form\\InscriptionType', 'getInscriptionTypeService', true],
            'App\\Form\\SearchType' => ['privates', 'App\\Form\\SearchType', 'getSearchTypeService', true],
            'App\\Form\\UserPasswordType' => ['privates', 'App\\Form\\UserPasswordType', 'getUserPasswordTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'Karser\\Recaptcha3Bundle\\Form\\Recaptcha3Type' => ['privates', 'karser_recaptcha3.form.type', 'getKarserRecaptcha3_Form_TypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\CommentType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\FilmType' => '?',
            'App\\Form\\FilterType' => '?',
            'App\\Form\\InscriptionType' => '?',
            'App\\Form\\SearchType' => '?',
            'App\\Form\\UserPasswordType' => '?',
            'App\\Form\\UserType' => '?',
            'Karser\\Recaptcha3Bundle\\Form\\Recaptcha3Type' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
