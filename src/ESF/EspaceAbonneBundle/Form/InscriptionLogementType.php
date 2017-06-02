<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InscriptionLogementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('type', ChoiceType::class, array(
            'choices' => array(
                'Campus' => 'Campus',
                'Partenaire' => 'Partenaire'
                ),
            'required'    => true,
            'placeholder' => 'Choisir un type de logement',
            'empty_data'  => null))

        ->add('nometablissement', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Universite',
            'placeholder' => 'Sélectionnez un établissement',
            ))  

        ->add('raisonsocial', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:EA_Morale',
            'placeholder' => 'Sélectionnez un établissement',
            ))

        ->add('rechercher', SubmitType::class, array(
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
            'error_bubbling' => true
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_inscription_logement';
    }


}
