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

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_page")
     */
    public function getContactPage()
    {
        return $this->render('contact.html.twig');
    }
}
