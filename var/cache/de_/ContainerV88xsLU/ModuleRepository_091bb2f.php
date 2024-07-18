<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
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

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getList', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getInstalledModules', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getMustBeConfiguredModules', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getUpgradableModules', array(), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'setActionUrls', array('collection' => $collection), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        return $this->valueHolderd781f->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer42b3a = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolderd781f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderd781f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolderd781f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer42b3a && ($this->initializer42b3a->__invoke($valueHolderd781f, $this, '__get', ['name' => $name], $this->initializer42b3a) || 1) && $this->valueHolderd781f = $valueHolderd781f;

        if (isset(self::$publicProperties82ce9[$name])) {
            return $this->valueHolderd781f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
