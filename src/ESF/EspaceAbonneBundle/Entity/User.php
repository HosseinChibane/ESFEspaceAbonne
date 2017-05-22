<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Physique", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set physique
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Physique $physique
     *
     * @return User
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
}
