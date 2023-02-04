<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ConnexionController extends AbstractController {
    #[Route('/connexion', 'connexion.index', methods: ['GET'])]
    // creer une nouvelle entite
    // bin/console make:form
        //nommer fonction +type
        //a quelle entité il est relie
        //mettre les types pour chaque builder
        //appler methode createForm
        // dans template, on creer twig pour form et block start form
        // envoie du formulaire avec if( isSubmitted et on ajoute isFormIsValid)
        //creer un manager qui prepere pour un possible envoie sur doctrine, c'est persist
        // ensuite on flush pour envoyer
        //
    public function index() : Response {
        return $this->render('connexion.html.twig');
    }
}