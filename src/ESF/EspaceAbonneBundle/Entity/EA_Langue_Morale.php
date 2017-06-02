<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Langue
 *
 * @ORM\Table(name="e_a__langue__morale")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\EA_LangueRepository")
 */
class EA_Langue_Morale
{

    /**
    * Plusieurs Langues ont plusieurs Formations
   * @ORM\ManyToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Formation_Morale", inversedBy="langues")
   */
    private $formations;


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
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    public function __toString()
    {
        return $this->getLangue();
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
     * Set langue
     *
     * @param string $langue
     *
     * @return EA_Langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formation
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Formation_Morale $formation
     *
     * @return EA_Langue_Morale
     */
    public function addFormation(\ESF\EspaceAbonneBundle\Entity\EA_Formation_Morale $formation)
    {
        $this->formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Formation_Morale $formation
     */
    public function removeFormation(\ESF\EspaceAbonneBundle\Entity\EA_Formation_Morale $formation)
    {
        $this->formations->removeElement($formation);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }
}
