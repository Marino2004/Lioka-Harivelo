<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    /**
     * @Route("/redirect", name="app_redirect")
     */
    public function index(): Response
    {
        return $this->render('redirect/index.html.twig', [
            'controller_name' => 'RedirectController',
        ]);
    }
}
