<?php
/**
 * Created by PhpStorm.
 * User: Delphine_Corneil
 * Date: 17/03/2019
 * Time: 11:43
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\DTO\ContactDTO;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_page")
     */
    public function getContactPage(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new ContactDTO();
        $formContact = $this
            ->createForm(ContactType::class, $contact)
            ->handleRequest($request);

        if ($formContact->isSubmitted() && $formContact->isValid()) {
            // Test recaptcha

            $monMail = getenv('mail_address');

            $message = (new \Swift_Message(""))
                ->setFrom(['embellir-la-vie@mail.com' => 'Embellir la vie'])
                ->setTo($monMail)
                ->setBody(
                    $this->renderView(
                        'mail.html.twig', [
                            'contact' => $contact
                        ]
                    ),
                    'text/html'
                );

            $mailer->send($message);

            return $this->redirect($request->getUri());
        }
        return $this->render('contact.html.twig', [
            'form' => $formContact->createView(),
        ]);
    }
}
