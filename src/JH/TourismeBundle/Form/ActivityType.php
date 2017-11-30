<?php

namespace JH\TourismeBundle\Form;

use JH\TourismeBundle\Repository\CityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityType extends AbstractType
{
    
    private $departmentId = null;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Construction des champs du formulaire avec leur type
        $builder
            ->add("name", TextType::class)
            ->add("description", TextAreaType::class)
            ->add("address", TextAreaType::class)
            ->add("website", UrlType::class)
            ->add("department", EntityType::class, array(
                'class'         => 'JHTourismeBundle:Department', 
                'mapped'        => false,
                'choice_label'  => 'name'
                ))
            ->add("save", SubmitType::class)
        ;
        
        // Création d'une fonction pour ajouter et gérer le contenu du champ ville
        $formModifier = function (FormInterface $form)
        {
            $form->add("city", EntityType::class, array(
                'class'         => 'JHTourismeBundle:City',
                'query_builder' => function(CityRepository $cr) use($departmentId) {return $cr->getAllByDepartment($this->departmentId);},
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
                $formModifier($event->getForm());
            }
        );
        
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
        $resolver->setDefaults(array('data_class' => "JH\TourismeBundle\Entity\Activity"));
    }
}


