<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormInterface;
use ESF\EspaceAbonneBundle\Entity\T_Formation_Universite;
use ESF\EspaceAbonneBundle\Entity\T_Langue_Universite;
use ESF\EspaceAbonneBundle\Entity\T_Universite;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class InscriptionUniversiteType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('langue', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:T_Langue_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('l')
                ->orderBy('l.langue', 'ASC');
            },
            'choice_label' => 'langue',
            'required'    => true,
            'placeholder' => 'Sélectionner un élément dans la liste des langues',
            'empty_data'  => null,
            ))

        ->add('formation', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:T_Formation_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('f')
                ->orderBy('f.formation', 'ASC');
            },
            'choice_label' => 'formation',
            'required'    => true,
            'placeholder' => 'Sélectionner un élément dans la liste des formations',
            'empty_data'  => null,
            ))

        ->add('nometablissement', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:T_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.nometablissement', 'ASC');
            },
            'choice_label' => 'nometablissement',
            'required'    => true,
            'placeholder' => 'Sélectionner un élément dans la liste des etablissements',
            'empty_data'  => null,
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));

        $formModifier = function (FormInterface $form, T_Langue_Universite $langue = null) {
            $formation = null === $langue ? array() : $langue->getFormation();

            $form->add('formation', EntityType::class, array(
                'class'       => 'ESFEspaceAbonneBundle:T_Formation_Universite',
                'placeholder' => 'Sélectionner un élément dans la liste des formations',
                'choices'     => $formation,
                ));        
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                if($data === null || !method_exists($data, 'getFormation')) {
                    $formModifier($event->getForm(), null);
                } else {
                    $formModifier($event->getForm(), $data->getFormation());
                }
            });

        $builder->get('langue')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $formation = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $formation);
            });

        $formModifierUniversite = function (FormInterface $form, T_Formation_Universite $formation = null) {
            $nometablissement = null === $formation ? array() : $formation->getUniversite();

            $form->add('nometablissement', EntityType::class, array(
                'class' => 'ESFEspaceAbonneBundle:T_Universite',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ->orderBy('u.nometablissement', 'ASC');
                },
                'choice_label' => 'nometablissement',
                'required'    => true,
                'placeholder' => 'Sélectionner un élément dans la liste des etablissements',
                'empty_data'  => null,
                ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifierUniversite) {
                $data = $event->getData();                
                if($data === null || !method_exists($data, 'getUniversite')) {
                    $formModifierUniversite($event->getForm(), null);
                } else {
                    $formModifierUniversite($event->getForm(), $data->getUniversite());
                }
            });

        $builder->get('formation')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifierUniversite) {
                $formation = $event->getForm()->getData();
                $formModifierUniversite($event->getForm()->getParent(), $formation);
            });    
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_t_universite';
    }
}