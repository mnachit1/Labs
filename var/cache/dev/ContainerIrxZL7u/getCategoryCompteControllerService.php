<?php

namespace ContainerIrxZL7u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCompteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategoryCompteController' shared autowired service.
     *
     * @return \App\Controller\CategoryCompteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CategoryCompteController.php';

        $container->services['App\\Controller\\CategoryCompteController'] = $instance = new \App\Controller\CategoryCompteController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\CategoryCompteController', $container));

        return $instance;
    }
}
