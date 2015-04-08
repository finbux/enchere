<?php

namespace Enchere\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Enchere\Bundle\MainBundle\Entity\Conteneur;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //On initialise le entityManger pour accéder aux entités et la bdd
        $em = $this->getDoctrine()->getManager();
        //Exemple d'insertion de donnée
        /*$conteneur = new Conteneur();
        $conteneur->setDescription('Un conteneur venant de cuba');
        $conteneur->setName('Conteneur fumant');
        $conteneur->setImage('');
        $conteneur->setLastTime('5');
        $conteneur->setPrix('5000');
        $em->persist($conteneur);
        $conteneur2 = new Conteneur();
        $conteneur2->setDescription('Un conteneur abimé');
        $conteneur2->setName('Conteneur tombé du camion');
        $conteneur2->setImage('');
        $conteneur2->setLastTime('5');
        $conteneur2->setPrix('800');

        $em->persist($conteneur2);
        $em->flush();
        */

        //On récupére le repository de l'entité conteneur
        $em = $this->getDoctrine()->getRepository('MainBundle:Conteneur');
        // On récupère les 5 derniers conteneur ajoutés
        $conteneurs = $em->findBy(array(),array('id' => 'DESC'),3);
        //On retourne la vue avec en paramètre le tableau des conteneurs
        return $this->render('MainBundle:Default:index.html.twig',array('conteneurs' => $conteneurs));
    }
}
