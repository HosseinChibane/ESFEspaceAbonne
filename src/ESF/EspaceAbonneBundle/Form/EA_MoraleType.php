<?php

namespace ESF\EspaceAbonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EA_MoraleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('raisonsocial')->add('siret')->add('fax')->add('naf')->add('url')->add('alt')->add('numero')->add('rue')->add('codepostal')->add('ville')->add('pays')->add('gsm')->add('telephone')->add('courriel')->add('formations');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ESF\EspaceAbonneBundle\Entity\EA_Morale'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esf_espaceabonnebundle_ea_morale';
    }


}
