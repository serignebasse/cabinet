<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $idrv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="frequenceRv", type="string", length=45, nullable=true)
     */
    private $frequencerv;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_rv", referencedColumnName="idPatient")
     * })
     */
    private $idpatientRv;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin_rv", referencedColumnName="idMedecin")
     * })
     */
    private $idmedecinRv;

    /**
     * @var \Secretaire
     *
     * @ORM\ManyToOne(targetEntity="Secretaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSecretaire_rv", referencedColumnName="idSecretaire")
     * })
     */
    private $idsecretaireRv;



    /**
     * Get idrv
     *
     * @return integer
     */
    public function getIdrv()
    {
        return $this->idrv;
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
     * Set frequencerv
     *
     * @param string $frequencerv
     *
     * @return Rendezvous
     */
    public function setFrequencerv($frequencerv)
    {
        $this->frequencerv = $frequencerv;

        return $this;
    }

    /**
     * Get frequencerv
     *
     * @return string
     */
    public function getFrequencerv()
    {
        return $this->frequencerv;
    }

    /**
     * Set idpatientRv
     *
     * @param \SamaBundle\Entity\Patient $idpatientRv
     *
     * @return Rendezvous
     */
    public function setIdpatientRv(\SamaBundle\Entity\Patient $idpatientRv = null)
    {
        $this->idpatientRv = $idpatientRv;

        return $this;
    }

    /**
     * Get idpatientRv
     *
     * @return \SamaBundle\Entity\Patient
     */
    public function getIdpatientRv()
    {
        return $this->idpatientRv;
    }

    /**
     * Set idmedecinRv
     *
     * @param \SamaBundle\Entity\Medecin $idmedecinRv
     *
     * @return Rendezvous
     */
    public function setIdmedecinRv(\SamaBundle\Entity\Medecin $idmedecinRv = null)
    {
        $this->idmedecinRv = $idmedecinRv;

        return $this;
    }

    /**
     * Get idmedecinRv
     *
     * @return \SamaBundle\Entity\Medecin
     */
    public function getIdmedecinRv()
    {
        return $this->idmedecinRv;
    }

    /**
     * Set idsecretaireRv
     *
     * @param \SamaBundle\Entity\Secretaire $idsecretaireRv
     *
     * @return Rendezvous
     */
    public function setIdsecretaireRv(\SamaBundle\Entity\Secretaire $idsecretaireRv = null)
    {
        $this->idsecretaireRv = $idsecretaireRv;

        return $this;
    }

    /**
     * Get idsecretaireRv
     *
     * @return \SamaBundle\Entity\Secretaire
     */
    public function getIdsecretaireRv()
    {
        return $this->idsecretaireRv;
    }
}
