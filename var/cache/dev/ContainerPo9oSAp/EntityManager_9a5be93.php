<?php

namespace ContainerPo9oSAp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder20cca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00d14 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbbe4a = [
        
    ];

    public function getConnection()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getConnection', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getMetadataFactory', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getExpressionBuilder', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'beginTransaction', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getCache', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'transactional', array('func' => $func), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->transactional($func);
    }

    public function commit()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'commit', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->commit();
    }

    public function rollback()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'rollback', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getClassMetadata', array('className' => $className), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'createQuery', array('dql' => $dql), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'createNamedQuery', array('name' => $name), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'createQueryBuilder', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'flush', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'clear', array('entityName' => $entityName), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->clear($entityName);
    }

    public function close()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'close', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->close();
    }

    public function persist($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'persist', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'remove', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'refresh', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'detach', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'merge', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'contains', array('entity' => $entity), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getEventManager', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getConfiguration', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'isOpen', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getUnitOfWork', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getProxyFactory', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'initializeObject', array('obj' => $obj), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'getFilters', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'isFiltersStateClean', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'hasFilters', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return $this->valueHolder20cca->hasFilters();
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

        $instance->initializer00d14 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder20cca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20cca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder20cca->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__get', ['name' => $name], $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        if (isset(self::$publicPropertiesbbe4a[$name])) {
            return $this->valueHolder20cca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20cca;

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

        $targetObject = $this->valueHolder20cca;
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
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20cca;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder20cca;
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
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__isset', array('name' => $name), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20cca;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder20cca;
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
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__unset', array('name' => $name), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20cca;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder20cca;
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
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__clone', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        $this->valueHolder20cca = clone $this->valueHolder20cca;
    }

    public function __sleep()
    {
        $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, '__sleep', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;

        return array('valueHolder20cca');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00d14 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00d14;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00d14 && ($this->initializer00d14->__invoke($valueHolder20cca, $this, 'initializeProxy', array(), $this->initializer00d14) || 1) && $this->valueHolder20cca = $valueHolder20cca;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20cca;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20cca;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
