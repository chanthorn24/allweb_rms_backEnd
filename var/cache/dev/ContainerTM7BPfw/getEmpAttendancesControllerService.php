<?php

namespace ContainerTM7BPfw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpAttendancesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmployeeAttendance\EmpAttendancesController' shared autowired service.
     *
     * @return \App\Controller\EmployeeAttendance\EmpAttendancesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EmployeeAttendance'.\DIRECTORY_SEPARATOR.'EmpAttendancesController.php';

        $container->services['App\\Controller\\EmployeeAttendance\\EmpAttendancesController'] = $instance = new \App\Controller\EmployeeAttendance\EmpAttendancesController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\EmployeeAttendance\\EmpAttendancesController', $container));

        return $instance;
    }
}