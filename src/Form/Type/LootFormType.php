<?php
/**
 * Created by PhpStorm.
 * User: arino
 * Date: 20/04/2019
 * Time: 20:19
 */

namespace App\Form\Type;


use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class LootFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('titre', TextType::class,array(
               'labal' => 'Titre du loot',
           ))
           ->add('description',TextareaType::class,array(
               'label' => 'Description du loot',
           ))
           ->add('imageLoot', FileSaveFormType::class,array(
               'label' => 'Loot',
           ))
       ;

    }

}