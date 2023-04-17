<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController {
    #[Route('/utilisateur/about', 'app_about', methods: ['GET'])]
    public function index() : Response {
        return $this->render('about.html.twig');
    }

}