<?php

namespace ContainerWf0qKEX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KX1a4vXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kX1a4vX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kX1a4vX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Employee\\UserController::create' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\Employee\\UserController::createAdmin' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\Employee\\UserController::login' => ['privates', '.service_locator.tgSnr9M', 'get_ServiceLocator_TgSnr9MService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.rvLVmH6', 'get_ServiceLocator_RvLVmH6Service', true],
            'App\\Controller\\ResetPasswordController::changePassword' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\ResetPasswordController::resetPassword' => ['privates', '.service_locator.dK1XmXJ', 'get_ServiceLocator_DK1XmXJService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Employee\\UserController:create' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\Employee\\UserController:createAdmin' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\Employee\\UserController:login' => ['privates', '.service_locator.tgSnr9M', 'get_ServiceLocator_TgSnr9MService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.rvLVmH6', 'get_ServiceLocator_RvLVmH6Service', true],
            'App\\Controller\\ResetPasswordController:changePassword' => ['privates', '.service_locator.nWpr6Po', 'get_ServiceLocator_NWpr6PoService', true],
            'App\\Controller\\ResetPasswordController:resetPassword' => ['privates', '.service_locator.dK1XmXJ', 'get_ServiceLocator_DK1XmXJService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Employee\\UserController::create' => '?',
            'App\\Controller\\Employee\\UserController::createAdmin' => '?',
            'App\\Controller\\Employee\\UserController::login' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\ResetPasswordController::changePassword' => '?',
            'App\\Controller\\ResetPasswordController::resetPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Employee\\UserController:create' => '?',
            'App\\Controller\\Employee\\UserController:createAdmin' => '?',
            'App\\Controller\\Employee\\UserController:login' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\ResetPasswordController:changePassword' => '?',
            'App\\Controller\\ResetPasswordController:resetPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
