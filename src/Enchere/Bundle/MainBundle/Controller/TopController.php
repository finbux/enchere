<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopController extends Controller
{

    public function topAction()
    {
        return $this->render('MainBundle:Top:classement.html.twig');
    }
}
