<?php

namespace ContainerXXIr9Ir;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6fb7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc9cff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0e4ba = [
        
    ];

    public function getConnection()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getConnection', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getMetadataFactory', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getExpressionBuilder', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'beginTransaction', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getCache', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'transactional', array('func' => $func), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->transactional($func);
    }

    public function commit()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'commit', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->commit();
    }

    public function rollback()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'rollback', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'createQuery', array('dql' => $dql), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'createQueryBuilder', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'flush', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'clear', array('entityName' => $entityName), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->clear($entityName);
    }

    public function close()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'close', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->close();
    }

    public function persist($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'persist', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'remove', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'refresh', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'detach', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'merge', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'contains', array('entity' => $entity), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getEventManager', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getConfiguration', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'isOpen', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getUnitOfWork', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getProxyFactory', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'getFilters', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'isFiltersStateClean', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'hasFilters', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return $this->valueHolder6fb7f->hasFilters();
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

        $instance->initializerc9cff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6fb7f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6fb7f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6fb7f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__get', ['name' => $name], $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        if (isset(self::$publicProperties0e4ba[$name])) {
            return $this->valueHolder6fb7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb7f;

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

        $targetObject = $this->valueHolder6fb7f;
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
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb7f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6fb7f;
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
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__isset', array('name' => $name), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb7f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6fb7f;
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
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__unset', array('name' => $name), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb7f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6fb7f;
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
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__clone', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        $this->valueHolder6fb7f = clone $this->valueHolder6fb7f;
    }

    public function __sleep()
    {
        $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, '__sleep', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;

        return array('valueHolder6fb7f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9cff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9cff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc9cff && ($this->initializerc9cff->__invoke($valueHolder6fb7f, $this, 'initializeProxy', array(), $this->initializerc9cff) || 1) && $this->valueHolder6fb7f = $valueHolder6fb7f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6fb7f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6fb7f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
