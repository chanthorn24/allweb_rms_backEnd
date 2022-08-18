<?php

namespace ContainerT2Sxn4R;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFamilyRelationshipsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Employee\FamilyRelationshipsController' shared autowired service.
     *
     * @return \App\Controller\Employee\FamilyRelationshipsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Employee'.\DIRECTORY_SEPARATOR.'FamilyRelationshipsController.php';

        $container->services['App\\Controller\\Employee\\FamilyRelationshipsController'] = $instance = new \App\Controller\Employee\FamilyRelationshipsController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Employee\\FamilyRelationshipsController', $container));

        return $instance;
    }
}
