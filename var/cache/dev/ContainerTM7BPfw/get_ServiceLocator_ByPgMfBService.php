<?php

namespace ContainerTM7BPfw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ByPgMfBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.byPgMfB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.byPgMfB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'JWTTokenManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'JWTTokenManager' => '?',
            'passwordHasher' => '?',
        ]);
    }
}
