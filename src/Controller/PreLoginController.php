<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreLoginController extends AbstractController
{
    #[Route('/', name: 'app_pre_login',methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('pre_login/preLogin.html.twig', [
        ]);
    }
}
