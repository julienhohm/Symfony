<?php

namespace JH\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TourismeController extends Controller
{
    public function homeAction()
    {
        return $this->render('JHTourismeBundle:Tourisme:home.html.twig');
    }
	
	public function showNavbarAction()
	{
        $navbar = $this->getDoctrine()->getManager()->getRepository("JHTourismeBundle:Menu")->findAll();
		return $this->render("JHTourismeBundle::menu.html.twig", array("navbar" => $navbar));
	}
}
