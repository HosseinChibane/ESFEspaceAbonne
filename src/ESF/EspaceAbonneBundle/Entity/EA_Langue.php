<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Langue
 *
 * @ORM\Table(name="e_a__langue")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\EA_LangueRepository")
 */
class EA_Langue
{
    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Morale", inversedBy = "langues")
   * @ORM\JoinColumn(nullable=false)
   */
    private $morale;

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
     * Set morale
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Morale $morale
     *
     * @return EA_Langue
     */
    public function setMorale(\ESF\EspaceAbonneBundle\Entity\EA_Morale $morale)
    {
        $this->morale = $morale;

        return $this;
    }

    /**
     * Get morale
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Morale
     */
    public function getMorale()
    {
        return $this->morale;
    }
}
