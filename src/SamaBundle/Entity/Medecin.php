<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin")
 * @ORM\Entity
 */
class Medecin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMedecin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMedecin", type="string", length=45, nullable=false)
     */
    private $nommedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMedecin", type="string", length=45, nullable=false)
     */
    private $prenommedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="addresseMedecin", type="string", length=45, nullable=true)
     */
    private $addressemedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="emailMedecin", type="string", length=25, nullable=true)
     */
    private $emailmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="telMedecin", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $telmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="sexeMedecin", type="string", length=15, nullable=true)
     */
    private $sexemedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="cabinetMedecin", type="string", length=45, nullable=true)
     */
    private $cabinetmedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="specialiteMedecin", type="string", length=30, nullable=true)
     */
    private $specialitemedecin;



    /**
     * Get idmedecin
     *
     * @return integer
     */
    public function getIdmedecin()
    {
        return $this->idmedecin;
    }

    /**
     * Set nommedecin
     *
     * @param string $nommedecin
     *
     * @return Medecin
     */
    public function setNommedecin($nommedecin)
    {
        $this->nommedecin = $nommedecin;

        return $this;
    }

    /**
     * Get nommedecin
     *
     * @return string
     */
    public function getNommedecin()
    {
        return $this->nommedecin;
    }

    /**
     * Set prenommedecin
     *
     * @param string $prenommedecin
     *
     * @return Medecin
     */
    public function setPrenommedecin($prenommedecin)
    {
        $this->prenommedecin = $prenommedecin;

        return $this;
    }

    /**
     * Get prenommedecin
     *
     * @return string
     */
    public function getPrenommedecin()
    {
        return $this->prenommedecin;
    }

    /**
     * Set addressemedecin
     *
     * @param string $addressemedecin
     *
     * @return Medecin
     */
    public function setAddressemedecin($addressemedecin)
    {
        $this->addressemedecin = $addressemedecin;

        return $this;
    }

    /**
     * Get addressemedecin
     *
     * @return string
     */
    public function getAddressemedecin()
    {
        return $this->addressemedecin;
    }

    /**
     * Set emailmedecin
     *
     * @param string $emailmedecin
     *
     * @return Medecin
     */
    public function setEmailmedecin($emailmedecin)
    {
        $this->emailmedecin = $emailmedecin;

        return $this;
    }

    /**
     * Get emailmedecin
     *
     * @return string
     */
    public function getEmailmedecin()
    {
        return $this->emailmedecin;
    }

    /**
     * Set telmedecin
     *
     * @param string $telmedecin
     *
     * @return Medecin
     */
    public function setTelmedecin($telmedecin)
    {
        $this->telmedecin = $telmedecin;

        return $this;
    }

    /**
     * Get telmedecin
     *
     * @return string
     */
    public function getTelmedecin()
    {
        return $this->telmedecin;
    }

    /**
     * Set sexemedecin
     *
     * @param string $sexemedecin
     *
     * @return Medecin
     */
    public function setSexemedecin($sexemedecin)
    {
        $this->sexemedecin = $sexemedecin;

        return $this;
    }

    /**
     * Get sexemedecin
     *
     * @return string
     */
    public function getSexemedecin()
    {
        return $this->sexemedecin;
    }

    /**
     * Set cabinetmedecin
     *
     * @param string $cabinetmedecin
     *
     * @return Medecin
     */
    public function setCabinetmedecin($cabinetmedecin)
    {
        $this->cabinetmedecin = $cabinetmedecin;

        return $this;
    }

    /**
     * Get cabinetmedecin
     *
     * @return string
     */
    public function getCabinetmedecin()
    {
        return $this->cabinetmedecin;
    }

    /**
     * Set specialitemedecin
     *
     * @param string $specialitemedecin
     *
     * @return Medecin
     */
    public function setSpecialitemedecin($specialitemedecin)
    {
        $this->specialitemedecin = $specialitemedecin;

        return $this;
    }

    /**
     * Get specialitemedecin
     *
     * @return string
     */
    public function getSpecialitemedecin()
    {
        return $this->specialitemedecin;
    }
}
