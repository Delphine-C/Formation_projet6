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
    private $annual_membership;

    private $sessions_card;

    private $annual_subscription;

    public function __construct()
    {
        $this->annual_membership = getenv('annual_membership');
        $this->sessions_card = getenv('sessions_card');
        $this->annual_subscription = getenv('annual_subscription');
    }

    /**
     * @Route("/infos", name="infospage")
     */
    public function getInfosPage()
    {
        return $this->render('infos.html.twig', [
            'annual_membership' => $this->annual_membership,
            'sessions_card' => $this->sessions_card,
            'annual_subscription' => $this->annual_subscription,
        ]);
    }
}