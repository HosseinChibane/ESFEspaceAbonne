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
        ->add('formation', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:T_Formation_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.formation', 'ASC');
            },
            'choice_label' => 'formation',
            'required'    => true,
            'placeholder' => 'Sélectionner un élément dans la liste des formations',
            'empty_data'  => '',
            ))

        ->add('langue', ChoiceType::class, array(
            'placeholder' => '',
            ))

        ->add('nometablissement', ChoiceType::class, array(
            'placeholder' => '',
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));

        $formModifier = function (FormInterface $form, T_Formation_Universite $formation = null) {
            $langue = null === $formation ? array() : $formation->getLangues();

            $form->add('langue', EntityType::class, array(
                'class'       => 'ESFEspaceAbonneBundle:T_Langue_Universite',
                'placeholder' => 'Sélectionner un élément dans la liste des langues',
                'choices'     => $langue,
                ));        
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                if($data === null || !method_exists($data, 'getLangues')) {
                    $formModifier($event->getForm(), null);
                } else {
                    $formModifier($event->getForm(), $data->getLangues());
                }
            });

        $builder->get('formation')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $formation = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $formation);
            });

        $formModifierUniversite = function (FormInterface $form, T_Langue_Universite $langue = null) {
            $nometablissement = null === $langue ? array() : $langue->getFormation()->getUniversite();

            $form->add('nometablissement', EntityType::class, array(
                'class' => 'ESFEspaceAbonneBundle:T_Universite',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ->orderBy('u.nometablissement', 'ASC');
                },
                'choice_label' => 'nometablissement',
                'required'    => true,
                'placeholder' => 'Choisir un établissement',
                'empty_data'  => '',
                ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifierUniversite) {
                $data = $event->getData();
                
                if($data === null || !method_exists($data, 'getFormation')) {
                    $formModifierUniversite($event->getForm(), null);
                } else {
                    $formModifierUniversite($event->getForm(), $data->getLangue());
                }
            });

        $builder->get('langue')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifierUniversite) {
                $langue = $event->getForm()->getData();
                $formModifierUniversite($event->getForm()->getParent(), $langue);
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