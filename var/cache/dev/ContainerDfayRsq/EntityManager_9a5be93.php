<?php

namespace ContainerDfayRsq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2dfd5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa3ae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82f80 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getConnection', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getMetadataFactory', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getExpressionBuilder', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'beginTransaction', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getCache', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'transactional', array('func' => $func), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'commit', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->commit();
    }

    public function rollback()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'rollback', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'createQuery', array('dql' => $dql), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'createQueryBuilder', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'flush', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'clear', array('entityName' => $entityName), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'close', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->close();
    }

    public function persist($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'persist', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'remove', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'refresh', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'detach', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'merge', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'contains', array('entity' => $entity), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getEventManager', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getConfiguration', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'isOpen', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getUnitOfWork', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getProxyFactory', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'getFilters', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'isFiltersStateClean', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'hasFilters', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return $this->valueHolder2dfd5->hasFilters();
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

        $instance->initializerfa3ae = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2dfd5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2dfd5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2dfd5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__get', ['name' => $name], $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        if (isset(self::$publicProperties82f80[$name])) {
            return $this->valueHolder2dfd5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dfd5;

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

        $targetObject = $this->valueHolder2dfd5;
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
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dfd5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2dfd5;
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
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__isset', array('name' => $name), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dfd5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2dfd5;
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
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__unset', array('name' => $name), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dfd5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2dfd5;
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
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__clone', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        $this->valueHolder2dfd5 = clone $this->valueHolder2dfd5;
    }

    public function __sleep()
    {
        $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, '__sleep', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;

        return array('valueHolder2dfd5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa3ae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa3ae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa3ae && ($this->initializerfa3ae->__invoke($valueHolder2dfd5, $this, 'initializeProxy', array(), $this->initializerfa3ae) || 1) && $this->valueHolder2dfd5 = $valueHolder2dfd5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2dfd5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2dfd5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
