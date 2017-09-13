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
    private $idordonn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOrdonn", type="date", nullable=true)
     */
    private $dateordonn;

    /**
     * @var string
     *
     * @ORM\Column(name="medicament", type="text", length=65535, nullable=true)
     */
    private $medicament;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_ord", referencedColumnName="idPatient")
     * })
     */
    private $idpatientOrd;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin_ord", referencedColumnName="idMedecin")
     * })
     */
    private $idmedecinOrd;



    /**
     * Get idordonn
     *
     * @return integer
     */
    public function getIdordonn()
    {
        return $this->idordonn;
    }

    /**
     * Set dateordonn
     *
     * @param \DateTime $dateordonn
     *
     * @return Ordonnance
     */
    public function setDateordonn($dateordonn)
    {
        $this->dateordonn = $dateordonn;

        return $this;
    }

    /**
     * Get dateordonn
     *
     * @return \DateTime
     */
    public function getDateordonn()
    {
        return $this->dateordonn;
    }

    /**
     * Set medicament
     *
     * @param string $medicament
     *
     * @return Ordonnance
     */
    public function setMedicament($medicament)
    {
        $this->medicament = $medicament;

        return $this;
    }

    /**
     * Get medicament
     *
     * @return string
     */
    public function getMedicament()
    {
        return $this->medicament;
    }

    /**
     * Set idpatientOrd
     *
     * @param \SamaBundle\Entity\Patient $idpatientOrd
     *
     * @return Ordonnance
     */
    public function setIdpatientOrd(\SamaBundle\Entity\Patient $idpatientOrd = null)
    {
        $this->idpatientOrd = $idpatientOrd;

        return $this;
    }

    /**
     * Get idpatientOrd
     *
     * @return \SamaBundle\Entity\Patient
     */
    public function getIdpatientOrd()
    {
        return $this->idpatientOrd;
    }

    /**
     * Set idmedecinOrd
     *
     * @param \SamaBundle\Entity\Medecin $idmedecinOrd
     *
     * @return Ordonnance
     */
    public function setIdmedecinOrd(\SamaBundle\Entity\Medecin $idmedecinOrd = null)
    {
        $this->idmedecinOrd = $idmedecinOrd;

        return $this;
    }

    /**
     * Get idmedecinOrd
     *
     * @return \SamaBundle\Entity\Medecin
     */
    public function getIdmedecinOrd()
    {
        return $this->idmedecinOrd;
    }
}
