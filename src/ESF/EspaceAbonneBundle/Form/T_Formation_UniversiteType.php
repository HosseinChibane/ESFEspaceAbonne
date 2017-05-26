<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class T_Formation_UniversiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('formation', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Formation_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.formation', 'ASC');
            },
            'choice_label' => 'formation',
            'required'    => false,
            'placeholder' => 'Choisir une formation',
            'empty_data'  => null,
            ))
        ->add('prix')
        ->add('salaire')
        ->add('tauxembauche')
        ->add('tauxreussite')
        ->add('concours')
        ->add('niveau')
        ->add('universite', T_UniversiteType::class)
        ->add('langues', T_Langue_UniversiteType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\T_Formation_Universite'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_t_formation_universite';
    }


}
