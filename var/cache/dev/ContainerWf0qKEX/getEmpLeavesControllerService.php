<?php

namespace ContainerWf0qKEX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpLeavesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmployeeLeave\EmpLeavesController' shared autowired service.
     *
     * @return \App\Controller\EmployeeLeave\EmpLeavesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EmployeeLeave'.\DIRECTORY_SEPARATOR.'EmpLeavesController.php';

        $container->services['App\\Controller\\EmployeeLeave\\EmpLeavesController'] = $instance = new \App\Controller\EmployeeLeave\EmpLeavesController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\EmployeeLeave\\EmpLeavesController', $container));

        return $instance;
    }
}
