<?php

namespace JH\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use JH\TourismeBundle\Entity\Activity;
use JH\TourismeBundle\Form\ActivityType;
use JH\TourismeBundle\Entity\Department;
use JH\TourismeBundle\Entity\City;

class ActivityController extends Controller
{
    public function addAction(Request $request)
    {
		$activity = new Activity();
        
        $form = $this->createForm(ActivityType::class, $activity);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $this->getDoctrine()->getManager()->persist($activity)->flush();

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
    
    public function fillDepartmentsAction(Request $request, $regionId)
    {
        $departments = array();
       
        foreach($this->getDoctrine()->getManager()->getRepository(Department::class)->getByRegion($regionId) as $department)
        {
			$departments[] = array(
				"departmentId"      => $department["id"],
				"departmentName"    => $department["name"],
				"departmentNumber"  => $department["code"]
            );
		}
                
        return new JsonResponse($departments);
    }
    
    public function fillCitiesAction(Request $request, $departmentId)
    {
        $cities = array();
       
        foreach($this->getDoctrine()->getManager()->getRepository(City::class)->getByDepartment($departmentId) as $city)
        {
			$cities[] = array(
                "cityId"            => $city["id"],
				"cityName"          => $city["name"],
				"cityPostalCode"    => $city["postalCode"]
            );
		}
                
        return new JsonResponse($cities);
    }
	
}