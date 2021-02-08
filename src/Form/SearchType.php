<?php

namespace App\Form;


use App\Classe\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }





        public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'crsf_protection' => false,

        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }




}