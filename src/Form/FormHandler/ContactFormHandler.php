<?php

namespace App\Form\FormHandler;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;

final class ContactFormHandler
{
    public function __construct(
        public EntityManagerInterface $entityManager
    ) {}

    public function handleForm(Contact $contact): void
    {
        $this->entityManager->persist($contact);
        $this->entityManager->flush();
    }
}
