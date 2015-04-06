<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    public function enchereAction()
    {
        return $this->render('MainBundle:Enchere:enchere.html.twig');
    }

    public function topAction()
    {
        return $this->render('MainBundle:Top:classement.html.twig');
    }
}
