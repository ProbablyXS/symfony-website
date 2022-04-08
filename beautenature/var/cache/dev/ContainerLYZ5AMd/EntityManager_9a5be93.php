<?php

namespace ContainerLYZ5AMd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16217 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9379e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf73ce = [
        
    ];

    public function getConnection()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getConnection', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getMetadataFactory', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getExpressionBuilder', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'beginTransaction', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getCache', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'transactional', array('func' => $func), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'commit', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->commit();
    }

    public function rollback()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'rollback', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getClassMetadata', array('className' => $className), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'createQuery', array('dql' => $dql), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'createNamedQuery', array('name' => $name), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'createQueryBuilder', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'flush', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'clear', array('entityName' => $entityName), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->clear($entityName);
    }

    public function close()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'close', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->close();
    }

    public function persist($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'persist', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'remove', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'refresh', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'detach', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'merge', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'contains', array('entity' => $entity), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getEventManager', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getConfiguration', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'isOpen', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getUnitOfWork', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getProxyFactory', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'initializeObject', array('obj' => $obj), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'getFilters', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'isFiltersStateClean', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'hasFilters', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return $this->valueHolder16217->hasFilters();
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

        $instance->initializer9379e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16217) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16217 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16217->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__get', ['name' => $name], $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        if (isset(self::$publicPropertiesf73ce[$name])) {
            return $this->valueHolder16217->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16217;

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

        $targetObject = $this->valueHolder16217;
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
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16217;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16217;
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
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__isset', array('name' => $name), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16217;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16217;
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
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__unset', array('name' => $name), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16217;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16217;
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
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__clone', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        $this->valueHolder16217 = clone $this->valueHolder16217;
    }

    public function __sleep()
    {
        $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, '__sleep', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;

        return array('valueHolder16217');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9379e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9379e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9379e && ($this->initializer9379e->__invoke($valueHolder16217, $this, 'initializeProxy', array(), $this->initializer9379e) || 1) && $this->valueHolder16217 = $valueHolder16217;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16217;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16217;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
