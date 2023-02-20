<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProducersController extends AbstractController {
    #[Route('/producers', 'app_producers', methods: ['GET'])]
    public function index() : Response {
        return $this->render('producers.html.twig');
    }

}