<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatherineController extends AbstractController
{
    #[Route('/catherine', name: 'app_catherine')]
    public function index(): Response
    {
        return $this->render('catherine/index.html.twig', [
            'controller_name' => 'CatherineController',
        ]);
    }
}
