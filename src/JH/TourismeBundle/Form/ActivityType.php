<?php

namespace JH\TourismeBundle\Form;

use JH\TourismeBundle\Entity\Activity;
use JH\TourismeBundle\Entity\Region;
use JH\TourismeBundle\Entity\Department;
use JH\TourismeBundle\Entity\City;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Construction des champs du formulaire avec leur type
        $builder
            ->add("name", TextType::class, array(
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                'attr'          => array('class' => 'input')
                ))
            ->add("description", TextAreaType::class, array(
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                'attr'          => array('class' => 'textarea')
                ))
            ->add("address", TextAreaType::class, array(
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                'attr'          => array('class' => 'textarea')
                ))
            ->add("website", UrlType::class, array(
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                'attr'          => array('class' => 'input')
                ))
            ->add("region", EntityType::class, array(
                'class'         => Region::class, 
                'mapped'        => false,
                'choice_label'  => 'name',
                'placeholder'   => 'Choose a region',
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                ))
            ->add("department", EntityType::class, array(
                'class'         => Department::class, 
                'choices'       => array(),
                'mapped'        => false,
                'choice_label'  => 'name',
                'placeholder'   => 'Choose a department',
                'label_attr'    => array('class' => 'label'),
                'required'      => true
                ))
            ->add("city", EntityType::class, array(
                'class'         => City::class, 
                'choices'       => array(),
                'mapped'        => false,
                'choice_label'  => 'name',
                'placeholder'   => 'Choose a city',
                'label_attr'    => array('class' => 'label'),
                'required'      => true,
                'query_builder' => null
                ))
            ->add("save", SubmitType::class, array(
                'attr' => array('class' => 'button is-primary')
                ))
            ->add("routeforjson", HiddenType::class, array(
                'mapped' => false
                ))
        ;
        
        // Création d'une fonction pour ajouter et gérer le contenu du champ ville
       /* $formModifier = function (FormInterface $form, $departmentId)
        {
            $form->add("city", EntityType::class, array(
                'class'         => 'JHTourismeBundle:City',
                'query_builder' => function(CityRepository $cr) use($departmentId) {return $cr->getAllByDepartment($departmentId);},
                'choice_label'  => 'name'
                )
            );
        };
        
        // Création d'un écouteur sur le pré-remplissage du formulaire
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use($formModifier)
            {
                $data = $event->getData();
                $formModifier($event->getForm(), rand(1,13));
            }
        );
        */
       /* $builder->get("city")->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier)
            {
                $region = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $region);
            }
        );*/
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => Activity::class));
    }
    
}