<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IvanController extends AbstractController
{
    #[Route('/ivan', name: 'app_ivan')]
    public function index(): Response
    {
        return $this->render('ivan/index.html.twig', [
            'controller_name' => 'IvanController',
        ]);
    }
}
