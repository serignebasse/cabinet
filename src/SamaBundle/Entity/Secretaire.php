<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secretaire
 *
 * @ORM\Table(name="secretaire")
 * @ORM\Entity
 */
class Secretaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSecretaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSecretaire", type="string", length=45, nullable=false)
     */
    private $nomsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomSecretaire", type="string", length=45, nullable=false)
     */
    private $prenomsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="telSecretaire", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $telsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="emailSecretaire", type="string", length=25, nullable=true)
     */
    private $emailsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="sexeSecretaire", type="string", length=15, nullable=true)
     */
    private $sexesecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="addresseSecretaire", type="string", length=45, nullable=true)
     */
    private $addressesecretaire;



    /**
     * Get idsecretaire
     *
     * @return integer
     */
    public function getIdsecretaire()
    {
        return $this->idsecretaire;
    }

    /**
     * Set nomsecretaire
     *
     * @param string $nomsecretaire
     *
     * @return Secretaire
     */
    public function setNomsecretaire($nomsecretaire)
    {
        $this->nomsecretaire = $nomsecretaire;

        return $this;
    }

    /**
     * Get nomsecretaire
     *
     * @return string
     */
    public function getNomsecretaire()
    {
        return $this->nomsecretaire;
    }

    /**
     * Set prenomsecretaire
     *
     * @param string $prenomsecretaire
     *
     * @return Secretaire
     */
    public function setPrenomsecretaire($prenomsecretaire)
    {
        $this->prenomsecretaire = $prenomsecretaire;

        return $this;
    }

    /**
     * Get prenomsecretaire
     *
     * @return string
     */
    public function getPrenomsecretaire()
    {
        return $this->prenomsecretaire;
    }

    /**
     * Set telsecretaire
     *
     * @param string $telsecretaire
     *
     * @return Secretaire
     */
    public function setTelsecretaire($telsecretaire)
    {
        $this->telsecretaire = $telsecretaire;

        return $this;
    }

    /**
     * Get telsecretaire
     *
     * @return string
     */
    public function getTelsecretaire()
    {
        return $this->telsecretaire;
    }

    /**
     * Set emailsecretaire
     *
     * @param string $emailsecretaire
     *
     * @return Secretaire
     */
    public function setEmailsecretaire($emailsecretaire)
    {
        $this->emailsecretaire = $emailsecretaire;

        return $this;
    }

    /**
     * Get emailsecretaire
     *
     * @return string
     */
    public function getEmailsecretaire()
    {
        return $this->emailsecretaire;
    }

    /**
     * Set sexesecretaire
     *
     * @param string $sexesecretaire
     *
     * @return Secretaire
     */
    public function setSexesecretaire($sexesecretaire)
    {
        $this->sexesecretaire = $sexesecretaire;

        return $this;
    }

    /**
     * Get sexesecretaire
     *
     * @return string
     */
    public function getSexesecretaire()
    {
        return $this->sexesecretaire;
    }

    /**
     * Set addressesecretaire
     *
     * @param string $addressesecretaire
     *
     * @return Secretaire
     */
    public function setAddressesecretaire($addressesecretaire)
    {
        $this->addressesecretaire = $addressesecretaire;

        return $this;
    }

    /**
     * Get addressesecretaire
     *
     * @return string
     */
    public function getAddressesecretaire()
    {
        return $this->addressesecretaire;
    }
}
