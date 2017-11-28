<?php

namespace JH\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use JH\TourismeBundle\Entity\Activity;
use JH\TourismeBundle\Form\ActivityType;

class ActivityController extends Controller
{
    public function addAction(Request $request)
    {
		$activity = new Activity();
        
        $form = $this->createForm(ActivityType::class, $activity);
        
        if ($request->isMethod("POST") && $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            $request->getSession()->getFlashBag()->add("notice", "Activité bien enregistrée.");

            return $this->redirectToRoute("view_activity", array('id'=>$activity->getId()));
        }
        
        return $this->render('JHTourismeBundle:Activity:add.html.twig', array("form" => $form->createView()));
    }
    
    public function viewAction($id)
    {
        
        return new Response("Affichage de l'annonce d'id : ".$id);
        //return $this->render("JHTourismeBundle:Activity:view.html.twig", array("id"=>$id));
    }
	
}