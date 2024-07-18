<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ea52 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58df4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9d307 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getList', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getInstalledModules', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getMustBeConfiguredModules', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getUpgradableModules', array(), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'setActionUrls', array('collection' => $collection), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        return $this->valueHolder8ea52->clearCache($moduleName, $allShops);
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

        $instance->initializer58df4 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder8ea52) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder8ea52 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder8ea52->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer58df4 && ($this->initializer58df4->__invoke($valueHolder8ea52, $this, '__get', ['name' => $name], $this->initializer58df4) || 1) && $this->valueHolder8ea52 = $valueHolder8ea52;

        if (isset(self::$publicProperties9d307[$name])) {
            return $this->valueHolder8ea52->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
