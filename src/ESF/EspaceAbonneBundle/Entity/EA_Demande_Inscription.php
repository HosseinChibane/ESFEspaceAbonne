<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Demande_Inscription
 *
 * @ORM\Table(name="e_a__demande__inscription")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\EA_Demande_InscriptionRepository")
 */
class EA_Demande_Inscription
{
    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Physique", inversedBy="demandes")
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;

  /**
     * @ORM\OneToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Document_Inscription", cascade={"persist"})
     */
    private $documentinscription;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255, nullable=true)
     */
    private $etablissement;


    /**
     * @var string
     *
     * @ORM\Column(name="partenaire", type="string", length=255, nullable=true)
     */
    private $partenaire;

    public function __toString()
    {
        return $this->getType();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return EA_Demande_Inscription
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set documentinscription
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Document_Inscription $documentinscription
     *
     * @return EA_Demande_Inscription
     */
    public function setDocumentinscription(\ESF\EspaceAbonneBundle\Entity\EA_Document_Inscription $documentinscription)
    {
        $this->documentinscription = $documentinscription;

        return $this;
    }

    /**
     * Get documentinscription
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Document_Inscription
     */
    public function getDocumentinscription()
    {
        return $this->documentinscription;
    }

    /**
     * Set physique
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Physique $physique
     *
     * @return EA_Demande_Inscription
     */
    public function setPhysique(\ESF\EspaceAbonneBundle\Entity\EA_Physique $physique)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Physique
     */
    public function getPhysique()
    {
        return $this->physique;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EA_Demande_Inscription
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return EA_Demande_Inscription
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set partenaire
     *
     * @param string $partenaire
     *
     * @return EA_Demande_Inscription
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return string
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
}
