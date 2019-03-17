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
    public function getContactPage(Request $request)
    {
        $contact = new ContactDTO();
        $formContact = $this
            ->createForm(ContactType::class, $contact)
            ->handleRequest($request);


        return $this->render('contact.html.twig', [
            'form' => $formContact->createView(),
        ]);
    }
}
