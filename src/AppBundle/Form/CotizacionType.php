<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;



class CotizacionType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cliente', SearchType::class, array(
                    'label' => 'Buscar Cliente',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control'
                    )
                ))
                ->add('persona', TextType::class, array(
                    'label' => 'Persona de Contacto',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-persona form-control'
                    )
                ))
                ->add('iva', TextType::class, array(
                    'label' => 'IVA',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-iva form-control'
                    )
                ))
                ->add('Total', MoneyType::class, array(
                    'label' => 'Total',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-total form-control'
                    )
                ))
                
                
                ->add('Crear', SubmitType::class, array(
                    "attr" => array(
                        "class" => "form-submit btn btn-success"
                    )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Cotizacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_cotizacion';
    }

}
