<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnastasiaController extends AbstractController
{
    #[Route('/anastasia', name: 'app_anastasia')]
    public function index(): Response
    {
        return $this->render('anastasia/index.html.twig', [
            'controller_name' => 'AnastasiaController',
        ]);
    }
}
