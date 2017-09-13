<?php

namespace SamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payement
 *
 * @ORM\Table(name="payement", indexes={@ORM\Index(name="FKPatient_Pay_idx", columns={"idPatient_pay"})})
 * @ORM\Entity
 */
class Payement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPayement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpayement;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient_pay", referencedColumnName="idPatient")
     * })
     */
    private $idpatientPay;



    /**
     * Get idpayement
     *
     * @return integer
     */
    public function getIdpayement()
    {
        return $this->idpayement;
    }

    /**
     * Set montant
     *
     * @param string $montant
     *
     * @return Payement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idpatientPay
     *
     * @param \SamaBundle\Entity\Patient $idpatientPay
     *
     * @return Payement
     */
    public function setIdpatientPay(\SamaBundle\Entity\Patient $idpatientPay = null)
    {
        $this->idpatientPay = $idpatientPay;

        return $this;
    }

    /**
     * Get idpatientPay
     *
     * @return \SamaBundle\Entity\Patient
     */
    public function getIdpatientPay()
    {
        return $this->idpatientPay;
    }
}
