<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EnchereController extends Controller
{

    public function enchereAction()
    {
        return $this->render('MainBundle:Enchere:enchere.html.twig');
    }
}
