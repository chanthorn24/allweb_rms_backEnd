<?php

namespace ContainerYAdDty6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vj0MEKBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vj0MEKB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vj0MEKB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored.Bgqk17i', NULL, 'Cannot determine controller argument for "App\\Controller\\Employee\\EmpPositionsController::create()": the $request argument is type-hinted with the non-existent class or interface: "http\\Env\\Request".'],
        ], [
            'request' => '?',
        ]);
    }
}
