<?php

namespace ESF\EspaceAbonneBundle\Form;

use ESF\EspaceAbonneBundle\Form\DataTransformer\FormationToNumberTransformer;
use Doctrine\Common\Persistence\ObjectManager;

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

  private $transformer;

  public function __construct(FormationToNumberTransformer $transformer = null)
  {
    $this->transformer = $transformer;
}

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('langue', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Langue_Universite',
            'placeholder' => 'Sélectionnez une langue',
            ))

        ->add('formation', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Formation_Universite',
            'placeholder' => 'Sélectionnez une formation',
            ))

        ->add('nometablissement', EntityType::class, array(
            'class'       => 'ESFEspaceAbonneBundle:T_Universite',
            'placeholder' => 'Sélectionnez un établissement',
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            'label'=> 'Créer Demande',
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));

        $formModifier = function (FormInterface $form, T_Langue_Universite $langue = null) {
            $formation = null === $langue ? array() : $langue->getFormation();

            $form->add('formation', EntityType::class, array(
                'class'       => 'ESFEspaceAbonneBundle:T_Formation_Universite',
                'placeholder' => 'Sélectionnez une formations',
                'choices'     => $formation,
                ));  

            $formModifierUniversite = function (FormInterface $form, T_Formation_Universite $formation = null) {
                $nometablissement = null === $formation ? array() : $formation->getUniversite();

                $form->add('nometablissement', EntityType::class, array(
                    'class'       => 'ESFEspaceAbonneBundle:T_Universite',
                    'placeholder' => 'Sélectionnez un établissement',
                    'choices'     => $nometablissement,
                    ));  

                $builder->get('formation')->addEventListener(
                    FormEvents::POST_SUBMIT,
                    function (FormEvent $event) use ($formModifierUniversite) {
                        $formation = $event->getForm()->getData();
                        $formModifierUniversite($event->getForm()->getParent(), $formation);
                    }); 

                $builder->get('formation')->addModelTransformer(new FormationToNumberTransformer($this->transformer));        
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
        return 'esf_espaceabonnebundle_inscription_universite';
    }
}



/*
 

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


*/