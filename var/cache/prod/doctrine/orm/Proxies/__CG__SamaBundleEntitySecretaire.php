<?php

namespace Proxies\__CG__\SamaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Secretaire extends \SamaBundle\Entity\Secretaire implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'idsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'nomsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'prenomsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'telsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'emailsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'sexesecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'addressesecretaire'];
        }

        return ['__isInitialized__', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'idsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'nomsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'prenomsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'telsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'emailsecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'sexesecretaire', '' . "\0" . 'SamaBundle\\Entity\\Secretaire' . "\0" . 'addressesecretaire'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Secretaire $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getIdsecretaire()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdsecretaire();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsecretaire', []);

        return parent::getIdsecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomsecretaire($nomsecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomsecretaire', [$nomsecretaire]);

        return parent::setNomsecretaire($nomsecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomsecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomsecretaire', []);

        return parent::getNomsecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomsecretaire($prenomsecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomsecretaire', [$prenomsecretaire]);

        return parent::setPrenomsecretaire($prenomsecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomsecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomsecretaire', []);

        return parent::getPrenomsecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelsecretaire($telsecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelsecretaire', [$telsecretaire]);

        return parent::setTelsecretaire($telsecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelsecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelsecretaire', []);

        return parent::getTelsecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailsecretaire($emailsecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailsecretaire', [$emailsecretaire]);

        return parent::setEmailsecretaire($emailsecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailsecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailsecretaire', []);

        return parent::getEmailsecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexesecretaire($sexesecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexesecretaire', [$sexesecretaire]);

        return parent::setSexesecretaire($sexesecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexesecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexesecretaire', []);

        return parent::getSexesecretaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressesecretaire($addressesecretaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressesecretaire', [$addressesecretaire]);

        return parent::setAddressesecretaire($addressesecretaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressesecretaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressesecretaire', []);

        return parent::getAddressesecretaire();
    }

}