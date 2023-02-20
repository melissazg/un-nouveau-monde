<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PartnersController extends AbstractController {
    #[Route('/partners', 'app_partners', methods: ['GET'])]
    public function index() : Response {
        return $this->render('partners.html.twig');
    }

}