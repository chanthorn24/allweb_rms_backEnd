<?php

namespace ContainerEOUituq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56c32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3bfcc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties57228 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getConnection', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getMetadataFactory', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getExpressionBuilder', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'beginTransaction', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getCache', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'transactional', array('func' => $func), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'commit', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->commit();
    }

    public function rollback()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'rollback', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getClassMetadata', array('className' => $className), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'createQuery', array('dql' => $dql), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'createNamedQuery', array('name' => $name), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'createQueryBuilder', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'flush', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'clear', array('entityName' => $entityName), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->clear($entityName);
    }

    public function close()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'close', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->close();
    }

    public function persist($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'persist', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'remove', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'refresh', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'detach', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'merge', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'contains', array('entity' => $entity), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getEventManager', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getConfiguration', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'isOpen', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getUnitOfWork', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getProxyFactory', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'initializeObject', array('obj' => $obj), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'getFilters', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'isFiltersStateClean', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'hasFilters', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return $this->valueHolder56c32->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3bfcc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder56c32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56c32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56c32->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__get', ['name' => $name], $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        if (isset(self::$publicProperties57228[$name])) {
            return $this->valueHolder56c32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56c32;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56c32;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56c32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56c32;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__isset', array('name' => $name), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56c32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56c32;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__unset', array('name' => $name), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56c32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56c32;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__clone', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        $this->valueHolder56c32 = clone $this->valueHolder56c32;
    }

    public function __sleep()
    {
        $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, '__sleep', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;

        return array('valueHolder56c32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3bfcc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3bfcc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3bfcc && ($this->initializer3bfcc->__invoke($valueHolder56c32, $this, 'initializeProxy', array(), $this->initializer3bfcc) || 1) && $this->valueHolder56c32 = $valueHolder56c32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56c32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56c32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
