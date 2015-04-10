<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Enchere\Bundle\MainBundle\Entity\Conteneur;
use Symfony\Component\Config\Definition\Exception\Exception;

class ConteneurController extends Controller
{

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $em = $this->getDoctrine()->getRepository('MainBundle:Conteneur');

        $conteneur = $em->find($id);
        if(!$conteneur){
            throw $this->createNotFoundException('Pas de conteneur pour le numéro '.$id);
        }
        return $this->render('MainBundle:Conteneur:view.html.twig',array('conteneur' => $conteneur));
    }
}
