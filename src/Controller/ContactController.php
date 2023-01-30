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
    #[Route('/contact', 'app_contact', methods: ['GET'])]
    public function contact(Request $request, ContactFormHandler $contactFormHandler) : Response {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormHandler->handleForm($contactFormHandler);
        }
        return $this->render('contact.html.twig');
    }
}