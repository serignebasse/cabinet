<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity
 */
class Patient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPatient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpatient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPatient", type="string", length=45, nullable=false)
     */
    private $nompatient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPatient", type="string", length=45, nullable=false)
     */
    private $prenompatient;

    /**
     * @var string
     *
     * @ORM\Column(name="sexePatient", type="string", length=45, nullable=true)
     */
    private $sexepatient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissPatient", type="date", nullable=true)
     */
    private $datenaisspatient;

    /**
     * @var string
     *
     * @ORM\Column(name="addressePatient", type="string", length=45, nullable=true)
     */
    private $addressepatient;

    /**
     * @var string
     *
     * @ORM\Column(name="telPatient", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $telpatient;

    /**
     * @var integer
     *
     * @ORM\Column(name="agePatient", type="integer", nullable=true)
     */
    private $agepatient;



    /**
     * Get idpatient
     *
     * @return integer
     */
    public function getIdpatient()
    {
        return $this->idpatient;
    }

    /**
     * Set nompatient
     *
     * @param string $nompatient
     *
     * @return Patient
     */
    public function setNompatient($nompatient)
    {
        $this->nompatient = $nompatient;

        return $this;
    }

    /**
     * Get nompatient
     *
     * @return string
     */
    public function getNompatient()
    {
        return $this->nompatient;
    }

    /**
     * Set prenompatient
     *
     * @param string $prenompatient
     *
     * @return Patient
     */
    public function setPrenompatient($prenompatient)
    {
        $this->prenompatient = $prenompatient;

        return $this;
    }

    /**
     * Get prenompatient
     *
     * @return string
     */
    public function getPrenompatient()
    {
        return $this->prenompatient;
    }

    /**
     * Set sexepatient
     *
     * @param string $sexepatient
     *
     * @return Patient
     */
    public function setSexepatient($sexepatient)
    {
        $this->sexepatient = $sexepatient;

        return $this;
    }

    /**
     * Get sexepatient
     *
     * @return string
     */
    public function getSexepatient()
    {
        return $this->sexepatient;
    }

    /**
     * Set datenaisspatient
     *
     * @param \DateTime $datenaisspatient
     *
     * @return Patient
     */
    public function setDatenaisspatient($datenaisspatient)
    {
        $this->datenaisspatient = $datenaisspatient;

        return $this;
    }

    /**
     * Get datenaisspatient
     *
     * @return \DateTime
     */
    public function getDatenaisspatient()
    {
        return $this->datenaisspatient;
    }

    /**
     * Set addressepatient
     *
     * @param string $addressepatient
     *
     * @return Patient
     */
    public function setAddressepatient($addressepatient)
    {
        $this->addressepatient = $addressepatient;

        return $this;
    }

    /**
     * Get addressepatient
     *
     * @return string
     */
    public function getAddressepatient()
    {
        return $this->addressepatient;
    }

    /**
     * Set telpatient
     *
     * @param string $telpatient
     *
     * @return Patient
     */
    public function setTelpatient($telpatient)
    {
        $this->telpatient = $telpatient;

        return $this;
    }

    /**
     * Get telpatient
     *
     * @return string
     */
    public function getTelpatient()
    {
        return $this->telpatient;
    }

    /**
     * Set agepatient
     *
     * @param integer $agepatient
     *
     * @return Patient
     */
    public function setAgepatient($agepatient)
    {
        $this->agepatient = $agepatient;

        return $this;
    }

    /**
     * Get agepatient
     *
     * @return integer
     */
    public function getAgepatient()
    {
        return $this->agepatient;
    }
}
