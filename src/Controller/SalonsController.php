<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SalonsController extends AbstractController
{
    #[Route('/salons', name: 'app_salons')]
    public function index(): Response
    {
        return $this->render('salons/index.html.twig', [
            'controller_name' => 'SalonsController',
        ]);
    }
}
