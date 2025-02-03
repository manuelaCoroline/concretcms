<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\File\Image;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Editor extends \Concrete\Core\Entity\File\Image\Editor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'handle', 'package'];
        }

        return ['__isInitialized__', 'name', 'handle', 'package'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Editor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getHandle()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getHandle();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandle', []);

        return parent::getHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandle($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandle', [$handle]);

        return parent::setHandle($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function getController(): \Concrete\Core\ImageEditor\Controller\EditorControllerInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageEditorElement(): ?\Concrete\Core\Filesystem\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageEditorElement', []);

        return parent::getImageEditorElement();
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnailEditorHandle(): ?\Concrete\Core\Filesystem\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnailEditorHandle', []);

        return parent::getThumbnailEditorHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackage', []);

        return parent::getPackage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPackage($package)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPackage', [$package]);

        return parent::setPackage($package);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageID', []);

        return parent::getPackageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageHandle', []);

        return parent::getPackageHandle();
    }

}
