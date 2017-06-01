<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormInterface;
use ESF\EspaceAbonneBundle\Entity\EA_Langue;
use ESF\EspaceAbonneBundle\Entity\EA_Personne;
use ESF\EspaceAbonneBundle\Entity\EA_Morale;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class InscriptionLangueType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('langue', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:EA_Langue',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.langue', 'ASC');                
            },
            'choice_label' => 'langue',
            'required'    => true,
            'placeholder' => 'Sélectionnez une langue',
            'empty_data'  => null,
            ))


        ->add('pays', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:EA_Morale',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.pays', 'ASC');
            },
            'choice_label' => 'pays',
            'required'    => true,
            'placeholder' => 'Sélectionnez un pays',
            'empty_data'  => null,
            ))


        ->add('raisonsocial', EntityType::class, array(
            'class' => 'ESFEspaceAbonneBundle:EA_Morale',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.raisonsocial', 'ASC');
            },
            'choice_label' => 'raisonsocial',
            'required'    => true,
            'placeholder' => 'Sélectionnez un partenaire',
            'empty_data'  => null,
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));


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
        return 'esf_espaceabonnebundle_t_universite';
    }
}
/*
 $formModifier = function (FormInterface $form, EA_Langue $langue = null) {
            $raisonsocial = null === $langue ? array() : $langue->getMorale();

            $form->add('raisonsocial', EntityType::class, array(
                'class'       => 'ESFEspaceAbonneBundle:EA_Morale',
                'placeholder' => 'Sélectionner un élément dans la liste des partenaire',
                'choices'     => $raisonsocial,
                ));        
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                if($data === null || !method_exists($data, 'getMorale')) {
                    $formModifier($event->getForm(), null);
                } else {
                    $formModifier($event->getForm(), $data->getMorale());
                }
            });

        $builder->get('langue')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $langue = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $langue);
            });
*/