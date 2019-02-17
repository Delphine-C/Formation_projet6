<?php
/**
 * Created by PhpStorm.
 * User: Delphine_Corneil
 * Date: 09/02/2019
 * Time: 10:39
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function getHomepage()
    {
        return $this->render('home.html.twig');
    }
}