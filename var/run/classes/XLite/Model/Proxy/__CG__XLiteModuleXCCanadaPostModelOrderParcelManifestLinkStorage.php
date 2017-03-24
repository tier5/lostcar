<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Manifest\Link;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Storage extends \XLite\Module\XC\CanadaPost\Model\Order\Parcel\Manifest\Link\Storage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'link', 'id', 'path', 'fileName', 'mime', 'storageType', 'size', 'date', 'loadError', 'loadErrorMessage', '_previous_state');
        }

        return array('__isInitialized__', 'link', 'id', 'path', 'fileName', 'mime', 'storageType', 'size', 'date', 'loadError', 'loadErrorMessage', '_previous_state');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Storage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setLink(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Manifest\Link $link = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLink', array($link));

        return parent::setLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileName($fileName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileName', array($fileName));

        return parent::setFileName($fileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileName', array());

        return parent::getFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMime($mime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMime', array($mime));

        return parent::setMime($mime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMime', array());

        return parent::getMime();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageType($storageType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorageType', array($storageType));

        return parent::setStorageType($storageType);
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', array($size));

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', array());

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', array());

        return parent::getLink();
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', array());

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageType', array());

        return parent::getStorageType();
    }

    /**
     * {@inheritDoc}
     */
    public function readOutput($start = NULL, $length = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'readOutput', array($start, $length));

        return parent::readOutput($start, $length);
    }

    /**
     * {@inheritDoc}
     */
    public function isFileExists($path = NULL, $forceFile = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFileExists', array($path, $forceFile));

        return parent::isFileExists($path, $forceFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getURL', array());

        return parent::getURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getFrontURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrontURL', array());

        return parent::getFrontURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getGetterURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGetterURL', array());

        return parent::getGetterURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminGetterURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminGetterURL', array());

        return parent::getAdminGetterURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', array());

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensionByMIME()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtensionByMIME', array());

        return parent::getExtensionByMIME();
    }

    /**
     * {@inheritDoc}
     */
    public function isURL($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isURL', array($path));

        return parent::isURL($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeClass', array());

        return parent::getMimeClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeName', array());

        return parent::getMimeName();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoadError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoadError', array());

        return parent::getLoadError();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoadErrorMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoadErrorMessage', array());

        return parent::getLoadErrorMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromRequest($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromRequest', array($key));

        return parent::loadFromRequest($key);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromMultipleRequest($key, $position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromMultipleRequest', array($key, $position));

        return parent::loadFromMultipleRequest($key, $position);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromLocalFile($path, $basename = NULL, $makeUnique = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromLocalFile', array($path, $basename, $makeUnique));

        return parent::loadFromLocalFile($path, $basename, $makeUnique);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromURL($url, $copy2fs = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromURL', array($url, $copy2fs));

        return parent::loadFromURL($url, $copy2fs);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromPath($path, $copy2fs = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromPath', array($path, $copy2fs));

        return parent::loadFromPath($path, $copy2fs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFile($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFile', array($path));

        return parent::removeFile($path);
    }

    /**
     * {@inheritDoc}
     */
    public function isAllowRemoveFile($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAllowRemoveFile', array($path));

        return parent::isAllowRemoveFile($path);
    }

    /**
     * {@inheritDoc}
     */
    public function renewStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'renewStorage', array());

        return parent::renewStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function renewDependentStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'renewDependentStorage', array());

        return parent::renewDependentStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplicates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplicates', array());

        return parent::getDuplicates();
    }

    /**
     * {@inheritDoc}
     */
    public function prepareBeforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareBeforeSave', array());

        return parent::prepareBeforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function prepareRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareRemove', array());

        return parent::prepareRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function getStoragePath($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoragePath', array($path));

        return parent::getStoragePath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function isImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImage', array());

        return parent::isImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminPermissions', array());

        return parent::getAdminPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', array());

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', array($data));

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', array($name));

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', array());

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', array());

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', array());

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($method, $args));

        return parent::__call($method, $args);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', array($name));

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', array($property, $value));

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', array($property));

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', array());

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', array());

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', array());

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', array());

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', array());

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', array());

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', array());

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', array());

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array());

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', array($field, $data));

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', array());

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', array($class));

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', array($type));

        return parent::prepareEntityBeforeCommit($type);
    }

}
