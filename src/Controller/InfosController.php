<?php
/**
 * Created by PhpStorm.
 * User: Delphine_Corneil
 * Date: 16/03/2019
 * Time: 11:37
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    /**
     * @Route("/infos", name="infospage")
     */
    public function getInfosPage()
    {
        return $this->render('infos.html.twig');
    }
}