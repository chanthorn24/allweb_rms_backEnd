<?php

<<<<<<<< HEAD:var/cache/dev/ContainerT2Sxn4R/get_Security_Command_UserPasswordHash_LazyService.php
namespace ContainerT2Sxn4R;
========
namespace ContainerMSf4iSG;
>>>>>>>> 5e7cf5478ac31747339049b440a3a4f5a989f526:var/cache/dev/ContainerMSf4iSG/get_Security_Command_UserPasswordHash_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_UserPasswordHash_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.command.user_password_hash.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.security.command.user_password_hash.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('security:hash-password', [], 'Hash a user password', false, function () use ($container): \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand {
            return ($container->privates['security.command.user_password_hash'] ?? $container->load('getSecurity_Command_UserPasswordHashService'));
        });
    }
}
