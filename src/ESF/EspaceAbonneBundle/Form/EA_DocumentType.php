<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class EA_DocumentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('PasseportName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Passeport'),
            'empty_data'  => null ))

        ->add('PasseportFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('CarteIdentiteName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Carte d\'identité'),
            'empty_data'  => null ))

        ->add('CarteIdentiteFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('BulletinNoteName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Bulletin de note'),
            'empty_data'  => null ))

        ->add('BulletinNoteFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('BacName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Baccalaureat'),
            'empty_data'  => null ))

        ->add('BacFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('CredentialName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Crédential'),
            'empty_data'  => null ))

        ->add('CredentialFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('LettreRecommendationName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Lettre de recommandation'),
            'empty_data'  => null ))

        ->add('LettreRecommendationFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('LettreMotivationName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'attr' => array('placeholder' => 'Lettre de motivation'),
            'empty_data'  => null ))
        
        ->add('LettreMotivationFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => false, // optional, default is true
            'download_link' => false, // optional, default is true
            ])

        ->add('updatedAt')

        ->add('uploadPasseport', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadCarteId', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadBulletinNote', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadBac', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadCredential', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadLettreRecommendation', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ->add('uploadLettreMotivation', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
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
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\EA_Document'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_ea_document';
    }


}
