<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class EA_PhysiqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('prenom', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('datenaissance', DateType::class, array('widget' => 'single_text'))

        ->add('numerocarteid', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('numero', IntegerType::class)

        ->add('rue', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('codepostal', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('ville', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('pays', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('gsm', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('telephone', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))
        
        ->add('courriel', EmailType::class)

        ->add('image', EA_ImageType::class)

        ->add('documents', EA_DocumentType::class)

        //Bug d'allocation de mémoire 
        /*->add('demandes', CollectionType::class, array(
            'entry_type' => EA_Demande_InscriptionType::class,
            'allow_add' => true,
            'allow_delete' => true,
            ))*/

        ->add('enregistrer', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\EA_Physique'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_ea_physique';
    }


}
