<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormInterface;
use ESF\EspaceAbonneBundle\Entity\T_Langue_Formation_Partenaire;
use ESF\EspaceAbonneBundle\Entity\T_Lieu_Formation_Partenaire;
use ESF\EspaceAbonneBundle\Entity\T_Partenaire_Universite;

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
            'class'       => 'ESFEspaceAbonneBundle:T_Langue_Formation_Partenaire',
            'placeholder' => 'Sélectionnez une langue',
            ))

        ->add('lieu', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Lieu_Formation_Partenaire',
            'placeholder' => 'Sélectionnez un pays',
            ))

        ->add('raisonsocial', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Partenaire_Universite',
            'placeholder' => 'Sélectionnez un partenaire',
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            'label'=> 'Créer Demande',
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));

        $formModifier = function (FormInterface $form, T_Langue_Formation_Partenaire $langue = null) {
            $lieu = null === $langue ? array() : $langue->getFormations();

            $form->add('lieu', EntityType::class, array(
                'class'       => 'ESFEspaceAbonneBundle:T_Lieu_Formation_Partenaire',
                'placeholder' => 'Sélectionnez un pays',
                'choices'     => $lieu,
                ));  

            $formModifierPartenaire = function (FormInterface $form, T_Lieu_Formation_Partenaire $lieu = null) {
                $raisonsocial = null === $lieu ? array() : $lieu->getPartenaires();

                $form->add('raisonsocial', EntityType::class, array(
                    'class'       => 'ESFEspaceAbonneBundle:T_Partenaire_Universite',
                    'placeholder' => 'Sélectionnez un partenaire',
                    'choices'     => $raisonsocial,
                    ));  

                $builder->get('lieu')->addEventListener(
                    FormEvents::POST_SUBMIT,
                    function (FormEvent $event) use ($formModifierPartenaire) {
                        $lieu = $event->getForm()->getData();
                        $formModifierPartenaire($event->getForm()->getParent(), $lieu);
                    }); 

                //$builder->get('lieu')->addModelTransformer(new FormationToNumberTransformer($this->transformer));        
            };
        };

        $builder->get('langue')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $langue = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $langue);
            });
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
        return 'esf_espaceabonnebundle_inscription_langue';
    }
}
/*

*/