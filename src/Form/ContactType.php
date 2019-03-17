<?php
/**
 * Created by PhpStorm.
 * User: Delphine_Corneil
 * Date: 17/03/2019
 * Time: 12:04
 */

namespace App\Form;

use App\DTO\ContactDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom Prénom',
                    'minLength' => 2,
                    'maxLength' => 40,
                    'id' => 'demo-name',
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Email',
                    'id' => 'demo-email',
                ]
            ])
            ->add('title', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Sujet',
                    'minLength' => 2,
                    'maxLength' => 100
                ]
            ])
            ->add('content', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Entrez votre message ici...',
                    'maxLength' => 400,
                    'rows' => 5
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactDTO::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return '';
    }
}