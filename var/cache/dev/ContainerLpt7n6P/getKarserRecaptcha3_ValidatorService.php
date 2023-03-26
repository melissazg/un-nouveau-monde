<?php

namespace ContainerLpt7n6P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKarserRecaptcha3_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'karser_recaptcha3.validator' shared service.
     *
     * @return \Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/karser/karser-recaptcha3-bundle/Validator/Constraints/Recaptcha3Validator.php';
        include_once \dirname(__DIR__, 4).'/vendor/google/recaptcha/src/ReCaptcha/ReCaptcha.php';
        include_once \dirname(__DIR__, 4).'/vendor/google/recaptcha/src/ReCaptcha/RequestMethod.php';
        include_once \dirname(__DIR__, 4).'/vendor/google/recaptcha/src/ReCaptcha/RequestMethod/CurlPost.php';
        include_once \dirname(__DIR__, 4).'/vendor/google/recaptcha/src/ReCaptcha/RequestMethod/Curl.php';
        include_once \dirname(__DIR__, 4).'/vendor/karser/karser-recaptcha3-bundle/Services/IpResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/karser/karser-recaptcha3-bundle/Services/IpResolver.php';

        $a = new \ReCaptcha\ReCaptcha($container->getEnv('RECAPTCHA3_SECRET'), new \ReCaptcha\RequestMethod\CurlPost(new \ReCaptcha\RequestMethod\Curl(), (new \Karser\Recaptcha3Bundle\Services\HostProvider('www.google.com'))->getVerifyUrl()));
        $a->setScoreThreshold(0.5);

        return $container->privates['karser_recaptcha3.validator'] = new \Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator($a, true, new \Karser\Recaptcha3Bundle\Services\IpResolver(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}