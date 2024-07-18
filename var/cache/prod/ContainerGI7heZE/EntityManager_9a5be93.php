<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ea52 = null;
    private $initializer58df4 = null;
    private static $publicProperties9d307 = [
        
    ];
    public function getConnection()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getConnection', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getMetadataFactory', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getExpressionBuilder', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'beginTransaction', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getCache', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getCache();
    }
    public function transactional($func)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'transactional', array('func' => $func), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'commit', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->commit();
    }
    public function rollback()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'rollback', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getClassMetadata', array('className' => $className), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'createQuery', array('dql' => $dql), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'createNamedQuery', array('name' => $name), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'createQueryBuilder', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'flush', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'clear', array('entityName' => $entityName), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->clear($entityName);
    }
    public function close()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'close', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->close();
    }
    public function persist($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'persist', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'remove', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'refresh', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'detach', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'merge', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'contains', array('entity' => $entity), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getEventManager', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getConfiguration', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'isOpen', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getUnitOfWork', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getProxyFactory', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'initializeObject', array('obj' => $obj), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getFilters', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'isFiltersStateClean', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'hasFilters', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return $this->valueHolder8ea52->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer58df4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8ea52) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ea52 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8ea52->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__get', ['name' => $name], $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        if (isset(self::$publicProperties9d307[$name])) {
            return $this->valueHolder8ea52->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ea52;
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
        $targetObject = $this->valueHolder8ea52;
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
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ea52;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ea52;
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
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__isset', array('name' => $name), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ea52;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8ea52;
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
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__unset', array('name' => $name), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ea52;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8ea52;
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
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__clone', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        $this->valueHolder8ea52 = clone $this->valueHolder8ea52;
    }
    public function __sleep()
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__sleep', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
        return array('valueHolder8ea52');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58df4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58df4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'initializeProxy', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ea52;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ea52;
    }
}
