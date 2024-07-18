<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd781f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42b3a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82ce9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getConnection', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getMetadataFactory', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getExpressionBuilder', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'beginTransaction', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getCache', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'transactional', array('func' => $func), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'commit', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->commit();
    }

    public function rollback()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'rollback', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getClassMetadata', array('className' => $className), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'createQuery', array('dql' => $dql), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'createNamedQuery', array('name' => $name), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'createQueryBuilder', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'flush', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'clear', array('entityName' => $entityName), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->clear($entityName);
    }

    public function close()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'close', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->close();
    }

    public function persist($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'persist', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'remove', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'refresh', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'detach', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'merge', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'contains', array('entity' => $entity), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getEventManager', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getConfiguration', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'isOpen', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getUnitOfWork', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getProxyFactory', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'initializeObject', array('obj' => $obj), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getFilters', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'isFiltersStateClean', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'hasFilters', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->hasFilters();
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

        $instance->initializer42b3a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd781f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd781f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd781f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__get', ['name' => $name], $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        if (isset(self::$publicProperties82ce9[$name])) {
            return $this->valueHolderd781f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd781f;

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

        $targetObject = $this->valueHolderd781f;
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
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd781f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd781f;
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
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__isset', array('name' => $name), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd781f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd781f;
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
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__unset', array('name' => $name), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd781f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd781f;
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
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__clone', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        $this->valueHolderd781f = clone $this->valueHolderd781f;
    }

    public function __sleep()
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__sleep', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return array('valueHolderd781f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42b3a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42b3a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'initializeProxy', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd781f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd781f;
    }
}
