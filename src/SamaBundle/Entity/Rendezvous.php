<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="fkPat_RV_idx", columns={"idPatient_rv"}), @ORM\Index(name="fkMedecin_RV_idx", columns={"idMedecin_rv"}), @ORM\Index(name="fkSecretaire_RV_idx", columns={"idSecretaire_rv"})})
 * @ORM\Entity
 */
class Rendezvous
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="frequence", type="string", length=45, nullable=true)
     */
    private $frequence;

    /**
     * @var \Patient
     *
     * @Assert\Valid()
     * @Assert\Type(type="SamaBundle\Entity\Patient")
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_rv", referencedColumnName="idPatient", nullable=false)
     * })
     */
    private $patient;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin_rv", referencedColumnName="idMedecin", nullable=false)
     * })
     */
    private $medecin;

    /**
     * @var \Secretaire
     *
     * @ORM\ManyToOne(targetEntity="Secretaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSecretaire_rv", referencedColumnName="idSecretaire", nullable=false)
     * })
     */
    private $secretaire;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rendezvous
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set frequence
     *
     * @param string $frequence
     *
     * @return Rendezvous
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return string
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set patient
     *
     * @param \SamaBundle\Entity\Patient $patient
     *
     * @return Rendezvous
     */
    public function setPatient(\SamaBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \SamaBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set medecin
     *
     * @param \SamaBundle\Entity\Medecin $medecin
     *
     * @return Rendezvous
     */
    public function setMedecin(\SamaBundle\Entity\Medecin $medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \SamaBundle\Entity\Medecin
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set secretaire
     *
     * @param \SamaBundle\Entity\Secretaire $secretaire
     *
     * @return Rendezvous
     */
    public function setSecretaire(\SamaBundle\Entity\Secretaire $secretaire)
    {
        $this->secretaire = $secretaire;

        return $this;
    }

    /**
     * Get secretaire
     *
     * @return \SamaBundle\Entity\Secretaire
     */
    public function getSecretaire()
    {
        return $this->secretaire;
    }
}
