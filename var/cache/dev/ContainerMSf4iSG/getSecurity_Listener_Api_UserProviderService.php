<?php

<<<<<<<< HEAD:var/cache/dev/ContainerT2Sxn4R/getSecurity_Listener_Api_UserProviderService.php
namespace ContainerT2Sxn4R;
========
namespace ContainerMSf4iSG;
>>>>>>>> 5e7cf5478ac31747339049b440a3a4f5a989f526:var/cache/dev/ContainerMSf4iSG/getSecurity_Listener_Api_UserProviderService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Api_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.api.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'UserProviderListener.php';

        return $container->privates['security.listener.api.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')));
    }
}
