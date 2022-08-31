<?php

namespace ContainerWf0qKEX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb1b8b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2626c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0297a = [
        
    ];

    public function getConnection()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getConnection', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getMetadataFactory', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getExpressionBuilder', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'beginTransaction', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getCache', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'transactional', array('func' => $func), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'commit', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->commit();
    }

    public function rollback()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'rollback', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getClassMetadata', array('className' => $className), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'createQuery', array('dql' => $dql), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'createNamedQuery', array('name' => $name), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'createQueryBuilder', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'flush', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'clear', array('entityName' => $entityName), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->clear($entityName);
    }

    public function close()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'close', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->close();
    }

    public function persist($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'persist', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'remove', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'refresh', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'detach', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'merge', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'contains', array('entity' => $entity), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getEventManager', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getConfiguration', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'isOpen', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getUnitOfWork', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getProxyFactory', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'initializeObject', array('obj' => $obj), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'getFilters', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'isFiltersStateClean', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'hasFilters', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return $this->valueHolderb1b8b->hasFilters();
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

        $instance->initializer2626c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb1b8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb1b8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb1b8b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__get', ['name' => $name], $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        if (isset(self::$publicProperties0297a[$name])) {
            return $this->valueHolderb1b8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1b8b;

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

        $targetObject = $this->valueHolderb1b8b;
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
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1b8b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb1b8b;
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
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__isset', array('name' => $name), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1b8b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb1b8b;
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
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__unset', array('name' => $name), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1b8b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb1b8b;
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
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__clone', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        $this->valueHolderb1b8b = clone $this->valueHolderb1b8b;
    }

    public function __sleep()
    {
        $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, '__sleep', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;

        return array('valueHolderb1b8b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2626c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2626c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2626c && ($this->initializer2626c->__invoke($valueHolderb1b8b, $this, 'initializeProxy', array(), $this->initializer2626c) || 1) && $this->valueHolderb1b8b = $valueHolderb1b8b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb1b8b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb1b8b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
