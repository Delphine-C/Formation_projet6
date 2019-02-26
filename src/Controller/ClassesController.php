<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClassesController extends AbstractController
{
    /**
     * @Route("/cours",name="classes")
     */
    public function getClassesPage()
    {
        return $this->render('classes.html.twig');
    }
}