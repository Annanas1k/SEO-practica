<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact', name: 'app_contact_us')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $contactMessage = new ContactMessage();
        $form = $this->createForm(ContactFormType::class, $contactMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->sendContactEmail($contactMessage, $mailer);

            $this->addFlash('success', 'Your message has been sent successfully!');

            return $this->redirectToRoute('app_contact_us');
        }

        return $this->render('contact_us/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    private function sendContactEmail(ContactMessage $contactMessage, MailerInterface $mailer): void
    {
        $message = (new Email())
            ->from($contactMessage->getEmail())
            ->to('radu.pavlovschi@gmail.com')
            ->subject('New contact message')
            ->html('Name: ' . $contactMessage->getName() . '<br>' .
                'Email: ' . $contactMessage->getEmail() . '<br>' .
                'Message: ' . $contactMessage->getMessage());

        $mailer->send($message);
    }
}
