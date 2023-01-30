<?php

namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\FormHandler\ContactFormHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController {
    #[Route('/contact', 'app_contact', methods: ['GET', 'POST'])]
    public function contact(Request $request, ContactFormHandler $contactFormHandler) : Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormHandler->handleForm($contact);
        }
        return $this->render('contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}