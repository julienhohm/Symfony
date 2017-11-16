<?php

namespace JH\TourismeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TourismeController extends Controller
{
    public function homeAction()
    {
        return $this->render('JHTourismeBundle:Tourisme:home.html.twig');
    }
}
