<?php

namespace ContainerDIqxsEW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10ce6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer91f0d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb5b9e = [
        
    ];

    public function getConnection()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getConnection', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getMetadataFactory', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getExpressionBuilder', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'beginTransaction', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getCache', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'transactional', array('func' => $func), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'commit', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->commit();
    }

    public function rollback()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'rollback', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getClassMetadata', array('className' => $className), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'createQuery', array('dql' => $dql), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'createNamedQuery', array('name' => $name), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'createQueryBuilder', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'flush', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'clear', array('entityName' => $entityName), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->clear($entityName);
    }

    public function close()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'close', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->close();
    }

    public function persist($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'persist', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'remove', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'refresh', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'detach', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'merge', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'contains', array('entity' => $entity), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getEventManager', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getConfiguration', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'isOpen', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getUnitOfWork', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getProxyFactory', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'initializeObject', array('obj' => $obj), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'getFilters', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'isFiltersStateClean', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'hasFilters', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return $this->valueHolder10ce6->hasFilters();
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

        $instance->initializer91f0d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder10ce6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10ce6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10ce6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__get', ['name' => $name], $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        if (isset(self::$publicPropertiesb5b9e[$name])) {
            return $this->valueHolder10ce6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10ce6;

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

        $targetObject = $this->valueHolder10ce6;
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
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10ce6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10ce6;
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
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__isset', array('name' => $name), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10ce6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10ce6;
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
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__unset', array('name' => $name), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10ce6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10ce6;
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
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__clone', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        $this->valueHolder10ce6 = clone $this->valueHolder10ce6;
    }

    public function __sleep()
    {
        $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, '__sleep', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;

        return array('valueHolder10ce6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer91f0d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer91f0d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer91f0d && ($this->initializer91f0d->__invoke($valueHolder10ce6, $this, 'initializeProxy', array(), $this->initializer91f0d) || 1) && $this->valueHolder10ce6 = $valueHolder10ce6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10ce6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10ce6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
