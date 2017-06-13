<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EA_Demande_InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('type', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))
        
        ->add('etat', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('etablissement', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('formation', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('langue', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('partenaire', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('physique', EA_PhysiqueType::class)
        ->add('documentinscription', EA_Document_InscriptionType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_ea_demande_inscription';
    }


}
