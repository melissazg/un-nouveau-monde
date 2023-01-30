<?php
namespace App\Controller;


use App\Entity\User;
use App\Form\FormHandler\InscriptionFormHandler;
use App\Form\InscriptionType;
use ContainerXfPviWI\getInscriptionTypeService;
use http\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class InscriptionController extends AbstractController{

    #[Route('/inscription', 'inscription.index', methods: ['GET', 'POST'])]
    public function create(Request $request, InscriptionFormHandler $inscriptionFormHandler) : Response {
        $user = new User();
        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $inscriptionFormHandler ->handleForm($user);
        }
        return $this->render('inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}