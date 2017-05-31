<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Adresse_Universite
 *
 * @ORM\Table(name="t__adresse__universite")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_Adresse_UniversiteRepository")
 */
class T_Adresse_Universite
{

    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Ville_Universite", cascade={"all"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    private $rue;

    public function __toString()
    {
        return $this->getRue();
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
     * Set numero
     *
     * @param integer $numero
     *
     * @return T_Adresse_Universite
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return T_Adresse_Universite
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Ville_Universite $ville
     *
     * @return T_Adresse_Universite
     */
    public function setVille(\ESF\EspaceAbonneBundle\Entity\T_Ville_Universite $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \ESF\EspaceAbonneBundle\Entity\T_Ville_Universite
     */
    public function getVille()
    {
        return $this->ville;
    }
}
