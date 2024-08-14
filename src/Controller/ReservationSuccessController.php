<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReservationSuccessController extends AbstractController
{
    #[Route('/reservation/success', name: 'app_reservation_success')]
    public function index(): Response
    {
        return $this->render('reservation_success/index.html.twig', [
            'controller_name' => 'ReservationSuccessController',
        ]);
    }
}
