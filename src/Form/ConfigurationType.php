<?php

namespace App\Form;

use App\Entity\Configuration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigurationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class)
            ->add('adresseFr')
            ->add('adresseEn')
            ->add('adresseAr')
            ->add('emailFr')
            ->add('emailEn')
            ->add('emailAr')
            ->add('phoneFr')
            ->add('phoneEn')
            ->add('phoneAr')
            ->add('presentationFr')
            ->add('presentationEn')
            ->add('presentationAr')
            ->add('facebookLink')
            ->add('linkedinLink')
            ->add('instagramLink')
            ->add('twitterLink')
            ->add('active')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Configuration::class,
        ]);
    }
}
