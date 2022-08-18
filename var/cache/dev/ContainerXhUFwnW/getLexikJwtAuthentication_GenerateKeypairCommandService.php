<?php

namespace ContainerXhUFwnW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_GenerateKeypairCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.generate_keypair_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GenerateKeyPairCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        $container->privates['lexik_jwt_authentication.generate_keypair_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), $container->getEnv('resolve:JWT_SECRET_KEY'), $container->getEnv('resolve:JWT_PUBLIC_KEY'), $container->getEnv('JWT_PASSPHRASE'), 'RS256');

        $instance->setName('lexik:jwt:generate-keypair');

        return $instance;
    }
}
