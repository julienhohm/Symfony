<?php

namespace JH\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivityController extends Controller
{
    public function addAction()
    {
		
        return $this->render('JHTourismeBundle:Activity:add.html.twig');
    }
	
}