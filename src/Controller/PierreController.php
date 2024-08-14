<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PierreController extends AbstractController
{
    #[Route('/pierre', name: 'app_pierre')]
    public function index(): Response
    {
        return $this->render('pierre/index.html.twig', [
            'controller_name' => 'PierreController',
        ]);
    }
}
