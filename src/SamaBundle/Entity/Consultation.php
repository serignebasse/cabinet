<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="fkPatient_Cons_idx", columns={"idPatient_cons"}), @ORM\Index(name="fkMedecin_cons_idx", columns={"idMedecin_cons"})})
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idConsult", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsult;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateConsult", type="date", nullable=true)
     */
    private $dateconsult;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostic", type="text", length=65535, nullable=true)
     */
    private $diagnostic;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_cons", referencedColumnName="idPatient")
     * })
     */
    private $idpatientCons;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin_cons", referencedColumnName="idMedecin")
     * })
     */
    private $idmedecinCons;



    /**
     * Get idconsult
     *
     * @return integer
     */
    public function getIdconsult()
    {
        return $this->idconsult;
    }

    /**
     * Set dateconsult
     *
     * @param \DateTime $dateconsult
     *
     * @return Consultation
     */
    public function setDateconsult($dateconsult)
    {
        $this->dateconsult = $dateconsult;

        return $this;
    }

    /**
     * Get dateconsult
     *
     * @return \DateTime
     */
    public function getDateconsult()
    {
        return $this->dateconsult;
    }

    /**
     * Set diagnostic
     *
     * @param string $diagnostic
     *
     * @return Consultation
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    /**
     * Get diagnostic
     *
     * @return string
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set idpatientCons
     *
     * @param \SamaBundle\Entity\Patient $idpatientCons
     *
     * @return Consultation
     */
    public function setIdpatientCons(\SamaBundle\Entity\Patient $idpatientCons = null)
    {
        $this->idpatientCons = $idpatientCons;

        return $this;
    }

    /**
     * Get idpatientCons
     *
     * @return \SamaBundle\Entity\Patient
     */
    public function getIdpatientCons()
    {
        return $this->idpatientCons;
    }

    /**
     * Set idmedecinCons
     *
     * @param \SamaBundle\Entity\Medecin $idmedecinCons
     *
     * @return Consultation
     */
    public function setIdmedecinCons(\SamaBundle\Entity\Medecin $idmedecinCons = null)
    {
        $this->idmedecinCons = $idmedecinCons;

        return $this;
    }

    /**
     * Get idmedecinCons
     *
     * @return \SamaBundle\Entity\Medecin
     */
    public function getIdmedecinCons()
    {
        return $this->idmedecinCons;
    }
}
