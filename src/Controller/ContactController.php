<?php

namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\FormHandler\ContactFormHandler;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController {
    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/contact', 'app_contact', methods: ['GET', 'POST'])]
    public function contact(Request $request, ContactFormHandler $contactFormHandler, MailerInterface $mailer) : Response
    {
        $contact = new Contact();
        if ($this->getUser()) {
            $contact->setFullName($this->getUser()->getFullName())
                ->setEmail($this->getUser()->getEmail());
        }
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormHandler->handleForm($contact);
            $email = (new TemplatedEmail())
                ->from($contact->getEmail())
                ->to('noreply@un-nouveau-monde.fr')
                ->subject($contact->getSubject())
                ->htmlTemplate('contact.html.twig')
                ->context([
                    'contact' => $contact
                ]);
            $mailer->send($email);
            $this->addFlash('success', 'Votre demande a été envoyée avec succès.');
            return $this->redirectToRoute('app_contact');
        }
        return $this->render('contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}