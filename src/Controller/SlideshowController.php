<?php
/**
 * Created by PhpStorm.
 * User: Delphine_Corneil
 * Date: 09/03/2019
 * Time: 12:19
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SlideshowController extends AbstractController
{
    /**
     * @Route("/diaporama", name="slideshow")
     */
    public function getCarouselPage()
    {
        return $this->render('carousel.html.twig');
    }
}