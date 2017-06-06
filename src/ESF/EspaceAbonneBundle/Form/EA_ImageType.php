<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EA_ImageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('imageName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Nom de l\'image'),
            'empty_data'  => null ))

        ->add('imageFile', VichImageType::class, [
            'label' => 'Choissisez une image...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('upload', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\EA_Image'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_ea_image';
    }


}
