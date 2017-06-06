<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * EA_Physique
 *
 * @ORM\Table(name="e_a__physique")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\EA_PhysiqueRepository")
 */
class EA_Physique
{
     /**
     * @ORM\OneToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Image", cascade={"all"}, fetch="EAGER")
     */
     private $image;

    /**
     * @ORM\OneToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Document", cascade={"all"}, fetch="EAGER")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription", mappedBy="physique", cascade={"all"}, fetch="EAGER")
     */
    private $demandes;

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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="datetime", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="numerocarteid", type="string", length=255, nullable=true)
     */
    private $numerocarteid;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=255, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=255, nullable=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255, nullable=true)
     */
    private $courriel;

    public function __toString()
    {
        return $this->getNom();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return EA_Physique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return EA_Physique
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return EA_Physique
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set numerocarteid
     *
     * @param string $numerocarteid
     *
     * @return EA_Physique
     */
    public function setNumerocarteid($numerocarteid)
    {
        $this->numerocarteid = $numerocarteid;

        return $this;
    }

    /**
     * Get numerocarteid
     *
     * @return string
     */
    public function getNumerocarteid()
    {
        return $this->numerocarteid;
    }


    /**
     * Set document
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Document $document
     *
     * @return EA_Physique
     */
    public function setDocument(\ESF\EspaceAbonneBundle\Entity\EA_Document $document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set compteutilisateur
     *
     * @param \ESF\EspaceAbonneBundle\Entity\User $compteutilisateur
     *
     * @return EA_Physique
     */
    public function setCompteutilisateur(\ESF\EspaceAbonneBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur = $compteutilisateur;

        return $this;
    }

    /**
     * Get compteutilisateur
     *
     * @return \ESF\EspaceAbonneBundle\Entity\User
     */
    public function getCompteutilisateur()
    {
        return $this->compteutilisateur;
    }

    /**
     * Set demandeinscription
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription
     *
     * @return EA_Physique
     */
    public function setDemandeinscription(\ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription = $demandeinscription;

        return $this;
    }

    /**
     * Get demandeinscription
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription
     */
    public function getDemandeinscription()
    {
        return $this->demandeinscription;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->compteutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->demandeinscription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Document $document
     *
     * @return EA_Physique
     */
    public function addDocument(\ESF\EspaceAbonneBundle\Entity\EA_Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Document $document
     */
    public function removeDocument(\ESF\EspaceAbonneBundle\Entity\EA_Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Add compteutilisateur
     *
     * @param \ESF\EspaceAbonneBundle\Entity\User $compteutilisateur
     *
     * @return EA_Physique
     */
    public function addCompteutilisateur(\ESF\EspaceAbonneBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur[] = $compteutilisateur;

        return $this;
    }

    /**
     * Remove compteutilisateur
     *
     * @param \ESF\EspaceAbonneBundle\Entity\User $compteutilisateur
     */
    public function removeCompteutilisateur(\ESF\EspaceAbonneBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur->removeElement($compteutilisateur);
    }

    /**
     * Add demandeinscription
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription
     *
     * @return EA_Physique
     */
    public function addDemandeinscription(\ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription[] = $demandeinscription;

        return $this;
    }

    /**
     * Remove demandeinscription
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription
     */
    public function removeDemandeinscription(\ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription->removeElement($demandeinscription);
    }

    /**
     * Set image
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Image $image
     *
     * @return EA_Physique
     */
    public function setImage(\ESF\EspaceAbonneBundle\Entity\EA_Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ESF\EspaceAbonneBundle\Entity\EA_Image
     */
    public function getImage()
    {
        return $this->image;
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

    /**
     * Add demande
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demande
     *
     * @return EA_Physique
     */
    public function addDemande(\ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demande)
    {
        $this->demandes[] = $demande;

        return $this;
    }

    /**
     * Remove demande
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demande
     */
    public function removeDemande(\ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription $demande)
    {
        $this->demandes->removeElement($demande);
    }

    /**
     * Get demandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemandes()
    {
        return $this->demandes;
    }

    /**
     * Set documents
     *
     * @param \ESF\EspaceAbonneBundle\Entity\EA_Document $documents
     *
     * @return EA_Physique
     */
    public function setDocuments(\ESF\EspaceAbonneBundle\Entity\EA_Document $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return EA_Physique
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
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
     * @return EA_Physique
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
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return EA_Physique
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return EA_Physique
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
     * @return EA_Physique
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
     * Set gsm
     *
     * @param string $gsm
     *
     * @return EA_Physique
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return EA_Physique
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
     * Set courriel
     *
     * @param string $courriel
     *
     * @return EA_Physique
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string
     */
    public function getCourriel()
    {
        return $this->courriel;
    }
}
