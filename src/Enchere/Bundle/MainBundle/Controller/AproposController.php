<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AproposController extends Controller
{

    public function aproposAction()
    {
        return $this->render('MainBundle:Apropos:apropos.html.twig');
    }
}
