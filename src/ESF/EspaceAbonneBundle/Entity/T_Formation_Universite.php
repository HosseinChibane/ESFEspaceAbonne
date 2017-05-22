<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Formation_Universite
 *
 * @ORM\Table(name="t__formation__universite")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_Formation_UniversiteRepository")
 */
class T_Formation_Universite
{
    /**
     * @ORM\OneToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Langue_Universite", mappedBy="formation")
     */
    private $langues;

    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Universite", inversedBy="formations")
   * @ORM\JoinColumn(nullable=false)
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
     * @ORM\Column(name="formation", type="string", length=255)
     */
    private $formation;
    
    public function __toString()
    {
        return $this->getFormation();
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
     * @return T_Formation_Universite
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
     * Constructor
     */
    public function __construct()
    {
        $this->langues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add langue
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Langue_Universite $langue
     *
     * @return T_Formation_Universite
     */
    public function addLangue(\ESF\EspaceAbonneBundle\Entity\T_Langue_Universite $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove langue
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Langue_Universite $langue
     */
    public function removeLangue(\ESF\EspaceAbonneBundle\Entity\T_Langue_Universite $langue)
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
     * Set universite
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Universite $universite
     *
     * @return T_Formation_Universite
     */
    public function setUniversite(\ESF\EspaceAbonneBundle\Entity\T_Universite $universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return \ESF\EspaceAbonneBundle\Entity\T_Universite
     */
    public function getUniversite()
    {
        return $this->universite;
    }
}
