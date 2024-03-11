<?php

namespace ContainerAr8zEHQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommandeController' shared autowired service.
     *
     * @return \App\Controller\CommandeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommandeController.php';

        $container->services['App\\Controller\\CommandeController'] = $instance = new \App\Controller\CommandeController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\CommandeController', $container));

        return $instance;
    }
}
