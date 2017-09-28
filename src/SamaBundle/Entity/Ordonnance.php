<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance", indexes={@ORM\Index(name="numPatient_idx", columns={"idPatient_ord"}), @ORM\Index(name="fk_Medecin_ord_idx", columns={"idMedecin_ord"})})
 * @ORM\Entity
 */
class Ordonnance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idOrdonn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOrdonn", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Medicament
     *
     * @ORM\ManyToOne(targetEntity="Medicament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedicament_ord", referencedColumnName="id")
     * })
     */
    private $medicament;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_ord", referencedColumnName="idPatient", nullable=false)
     * })
     */
    private $patient;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin_ord", referencedColumnName="idMedecin", nullable=false)
     * })
     */
    private $medecin;



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
     * @return Ordonnance
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
     * Set $medicament
     *
     * @param \SamaBundle\Entity\Medicament $medicament
     *
     * @return Medicament
     */
    public function setMedicament(\SamaBundle\Entity\Medicament $medicament)
    {
        $this->medicament= $medicament;

        return $this;
    }

    /**
     * Get $medicament
     *
     * @return \SamaBundle\Entity\Medicament
     */
    public function getMedicament()
    {
        return $this->medicament;
    }

    /**
     * Set patient
     *
     * @param \SamaBundle\Entity\Patient $patient
     *
     * @return Ordonnance
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
     * @return Ordonnance
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
}
