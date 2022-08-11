<?php

namespace ContainerUxV4l07;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ffcc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17202 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescfd66 = [
        
    ];

    public function getConnection()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getConnection', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getMetadataFactory', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getExpressionBuilder', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'beginTransaction', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getCache', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'transactional', array('func' => $func), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'commit', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->commit();
    }

    public function rollback()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'rollback', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getClassMetadata', array('className' => $className), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'createQuery', array('dql' => $dql), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'createNamedQuery', array('name' => $name), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'createQueryBuilder', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'flush', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'clear', array('entityName' => $entityName), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->clear($entityName);
    }

    public function close()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'close', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->close();
    }

    public function persist($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'persist', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'remove', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'refresh', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'detach', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'merge', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'contains', array('entity' => $entity), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getEventManager', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getConfiguration', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'isOpen', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getUnitOfWork', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getProxyFactory', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'initializeObject', array('obj' => $obj), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'getFilters', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'isFiltersStateClean', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'hasFilters', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return $this->valueHolder2ffcc->hasFilters();
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

        $instance->initializer17202 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2ffcc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ffcc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ffcc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__get', ['name' => $name], $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        if (isset(self::$publicPropertiescfd66[$name])) {
            return $this->valueHolder2ffcc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ffcc;

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

        $targetObject = $this->valueHolder2ffcc;
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
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ffcc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ffcc;
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
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__isset', array('name' => $name), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ffcc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ffcc;
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
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__unset', array('name' => $name), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ffcc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ffcc;
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
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__clone', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        $this->valueHolder2ffcc = clone $this->valueHolder2ffcc;
    }

    public function __sleep()
    {
        $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, '__sleep', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;

        return array('valueHolder2ffcc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer17202 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer17202;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer17202 && ($this->initializer17202->__invoke($valueHolder2ffcc, $this, 'initializeProxy', array(), $this->initializer17202) || 1) && $this->valueHolder2ffcc = $valueHolder2ffcc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ffcc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ffcc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
