<?php

<<<<<<<< HEAD:var/cache/dev/ContainerT2Sxn4R/getDebug_Security_Firewall_Authenticator_LoginService.php
namespace ContainerT2Sxn4R;
========
namespace ContainerMSf4iSG;
>>>>>>>> 5e7cf5478ac31747339049b440a3a4f5a989f526:var/cache/dev/ContainerMSf4iSG/getDebug_Security_Firewall_Authenticator_LoginService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_LoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableAuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        return $container->privates['debug.security.firewall.authenticator.login'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener(new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['security.authenticator.json_login.login'] ?? $container->load('getSecurity_Authenticator_JsonLogin_LoginService'))], ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.event_dispatcher.login'] ?? $container->load('getSecurity_EventDispatcher_LoginService')), 'login', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true, true, [])));
    }
}
