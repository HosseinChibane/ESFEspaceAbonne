<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * T_Document_Partenaire
 *
 * @ORM\Table(name="t__document__partenaire")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_Document_PartenaireRepository")
 * @Vich\Uploadable
 */
class T_Document_Partenaire
{

    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Partenaire_Universite", inversedBy="documents")
   * @ORM\JoinColumn(nullable=false)
   */
    private $partenaire;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Vich\UploadableField(mapping="partenaires_pdf", fileNameProperty="pdfName")
     * 
     * @var File
     */
    private $pdfFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $pdfName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
    */
    private $updatedAt;
    
    public function __toString()
    {
        return $this->getPdfName();
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
       public function setpdfFile(File $pdf = null)
       {
        $this->pdfFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getpdfFile()
    {
        return $this->pdfFile;
    }

    /**
     * Set pdfName
     *
     * @param string $pdfName
     *
     * @return T_Document_Universite
     */
    public function setPdfName($pdfName)
    {
        $this->pdfName = $pdfName;

        return $this;
    }

    /**
     * Get pdfName
     *
     * @return string
     */
    public function getPdfName()
    {
        return $this->pdfName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return T_Document_Universite
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set partenaire
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Partenaire_Universite $partenaire
     *
     * @return T_Document_Partenaire
     */
    public function setPartenaire(\ESF\EspaceAbonneBundle\Entity\T_Partenaire_Universite $partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return \ESF\EspaceAbonneBundle\Entity\T_Partenaire_Universite
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
}
