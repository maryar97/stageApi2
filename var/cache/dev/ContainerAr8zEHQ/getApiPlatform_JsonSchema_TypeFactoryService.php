<?php

namespace ContainerAr8zEHQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_TypeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\TypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactory.php';

        $container->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\JsonSchema\TypeFactory(($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));

        $instance->setSchemaFactory(($container->privates['api_platform.json_schema.backward_compatible_schema_factory'] ?? $container->load('getApiPlatform_JsonSchema_BackwardCompatibleSchemaFactoryService')));

        return $instance;
    }
}
