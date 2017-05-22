<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Universite
 *
 * @ORM\Table(name="t__universite")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_UniversiteRepository")
 */
class T_Universite
{

    /**
     * @ORM\OneToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Document_Universite", mappedBy="universite", cascade={"persist"})
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Formation_Universite", mappedBy="universite", cascade={"persist"})
     */
    private $formations;

    /**
     * @ORM\OneToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Image_Universite", mappedBy="universite", cascade={"persist"})
     */
    private $images;

    /**
     * @ORM\OneToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite", cascade={"persist"})
     */
    private $adresse;

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
     * @ORM\Column(name="nometablissement", type="string", length=255)
     */
    private $nometablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="siteinternet", type="string", length=255)
     */
    private $siteinternet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535)
     */
    private $description;

    public function __toString()
    {
        return $this->getNometablissement();
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
     * Set nometablissement
     *
     * @param string $nometablissement
     *
     * @return T_Universite
     */
    public function setNometablissement($nometablissement)
    {
        $this->nometablissement = $nometablissement;

        return $this;
    }

    /**
     * Get nometablissement
     *
     * @return string
     */
    public function getNometablissement()
    {
        return $this->nometablissement;
    }

    /**
     * Set siteinternet
     *
     * @param string $siteinternet
     *
     * @return T_Universite
     */
    public function setSiteinternet($siteinternet)
    {
        $this->siteinternet = $siteinternet;

        return $this;
    }

    /**
     * Get siteinternet
     *
     * @return string
     */
    public function getSiteinternet()
    {
        return $this->siteinternet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return T_Universite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image
     *
     * @return T_Universite
     */
    public function addImage(\ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image
     */
    public function removeImage(\ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add formation
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation
     *
     * @return T_Universite
     */
    public function addFormation(\ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation)
    {
        $this->formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation
     */
    public function removeFormation(\ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation)
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

    /**
     * Set adresse
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse
     *
     * @return T_Universite
     */
    public function setAdresse(\ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set image
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image
     *
     * @return T_Universite
     */
    public function setImage(\ESF\EspaceAbonneBundle\Entity\T_Image_Universite $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Add adresse
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse
     *
     * @return T_Universite
     */
    public function addAdresse(\ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse
     */
    public function removeAdresse(\ESF\EspaceAbonneBundle\Entity\T_Adresse_Universite $adresse)
    {
        $this->adresse->removeElement($adresse);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add document
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Document_Universite $document
     *
     * @return T_Universite
     */
    public function addDocument(\ESF\EspaceAbonneBundle\Entity\T_Document_Universite $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Document_Universite $document
     */
    public function removeDocument(\ESF\EspaceAbonneBundle\Entity\T_Document_Universite $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

}
