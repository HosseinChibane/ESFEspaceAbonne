<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Formation_Morale
 *
 * @ORM\Table(name="e_a__formation__morale")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\EA_Formation_MoraleRepository")
 */
class EA_Formation_Morale
{

    /**
    * Plusieurs Formations ont plusieurs Langues.
    * @ORM\ManyToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Langue_Morale", mappedBy="formations", cascade={"all"})
    */
    private $langues;

   /**
   * Plusieurs Formations ont plusieurs Partenaires.
   * @ORM\ManyToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Morale", inversedBy="formations", cascade={"all"})
   */
   private $morales;

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
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauRequis", type="string", length=255, nullable=true)
     */
    private $niveauRequis;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="tauxReussite", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tauxReussite;

    public function __toString()
    {
        return $this->getLieu();
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
     * Set formation
     *
     * @param string $formation
     *
     * @return EA_Formation_Morale
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return EA_Formation_Morale
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set niveauRequis
     *
     * @param string $niveauRequis
     *
     * @return EA_Formation_Morale
     */
    public function setNiveauRequis($niveauRequis)
    {
        $this->niveauRequis = $niveauRequis;

        return $this;
    }

    /**
     * Get niveauRequis
     *
     * @return string
     */
    public function getNiveauRequis()
    {
        return $this->niveauRequis;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return EA_Formation_Morale
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tauxReussite
     *
     * @param string $tauxReussite
     *
     * @return EA_Formation_Morale
     */
    public function setTauxReussite($tauxReussite)
    {
        $this->tauxReussite = $tauxReussite;

        return $this;
    }

    /**
     * Get tauxReussite
     *
     * @return string
     */
    public function getTauxReussite()
    {
        return $this->tauxReussite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->langues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->morales = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add langue
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Langue_Morale $langue
     *
     * @return EA_Formation_Morale
     */
    public function addLangue(\ESF\EspaceAbonneBundle\Entity\EA_Langue_Morale $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove langue
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Langue_Morale $langue
     */
    public function removeLangue(\ESF\EspaceAbonneBundle\Entity\EA_Langue_Morale $langue)
    {
        $this->langues->removeElement($langue);
    }

    /**
     * Get langues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * Add morale
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Morale $morale
     *
     * @return EA_Formation_Morale
     */
    public function addMorale(\ESF\EspaceAbonneBundle\Entity\EA_Morale $morale)
    {
        $this->morales[] = $morale;

        return $this;
    }

    /**
     * Remove morale
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Morale $morale
     */
    public function removeMorale(\ESF\EspaceAbonneBundle\Entity\EA_Morale $morale)
    {
        $this->morales->removeElement($morale);
    }

    /**
     * Get morales
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMorales()
    {
        return $this->morales;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return EA_Formation_Morale
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }
}
