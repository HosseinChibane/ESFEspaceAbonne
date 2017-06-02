<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Partenaire_Universite
 *
 * @ORM\Table(name="t__partenaire__universite")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_Partenaire_UniversiteRepository")
 */
class T_Partenaire_Universite
{

    /**
   * @ORM\ManyToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Universite", inversedBy="partenaires")
   */
    private $universite;

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
     * @ORM\Column(name="raisonSocial", type="string", length=255)
     */
    private $raisonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=20, nullable=true)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroRue", type="integer", nullable=true)
     */
    private $numeroRue;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRue", type="string", length=255, nullable=true)
     */
    private $nomRue;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true)
     */
    private $pays;


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
     * Set raisonSocial
     *
     * @param string $raisonSocial
     *
     * @return T_Partenaire_Universite
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    /**
     * Get raisonSocial
     *
     * @return string
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return T_Partenaire_Universite
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return T_Partenaire_Universite
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return T_Partenaire_Universite
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return T_Partenaire_Universite
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return T_Partenaire_Universite
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set numeroRue
     *
     * @param integer $numeroRue
     *
     * @return T_Partenaire_Universite
     */
    public function setNumeroRue($numeroRue)
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    /**
     * Get numeroRue
     *
     * @return int
     */
    public function getNumeroRue()
    {
        return $this->numeroRue;
    }

    /**
     * Set nomRue
     *
     * @param string $nomRue
     *
     * @return T_Partenaire_Universite
     */
    public function setNomRue($nomRue)
    {
        $this->nomRue = $nomRue;

        return $this;
    }

    /**
     * Get nomRue
     *
     * @return string
     */
    public function getNomRue()
    {
        return $this->nomRue;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return T_Partenaire_Universite
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return T_Partenaire_Universite
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return T_Partenaire_Universite
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->universite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add universite
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Universite $universite
     *
     * @return T_Partenaire_Universite
     */
    public function addUniversite(\ESF\EspaceAbonneBundle\Entity\T_Universite $universite)
    {
        $this->universite[] = $universite;

        return $this;
    }

    /**
     * Remove universite
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Universite $universite
     */
    public function removeUniversite(\ESF\EspaceAbonneBundle\Entity\T_Universite $universite)
    {
        $this->universite->removeElement($universite);
    }

    /**
     * Get universite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUniversite()
    {
        return $this->universite;
    }
}
