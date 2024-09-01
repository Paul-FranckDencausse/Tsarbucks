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
    #[Route('/stalingrad', name: 'app_stalingrad')]
    public function stalingrad(): Response
    {
        return $this->render('stalingrad/index.html.twig', [
            'controller_name' => 'StalingradController',
        ]);
    }
    #[Route('/anastasia', name: 'app_anastasia')]
    public function anastasia(): Response
    {
        return $this->render('anastasia/index.html.twig', [
            'controller_name' => 'AnastasiaController',
        ]);
    }
    #[Route('/catherine', name: 'app_catherine')]
    public function catherine(): Response
    {
        return $this->render('catherine/index.html.twig', [
            'controller_name' => 'CatherineController',
        ]);
    }
    #[Route('/ivan', name: 'app_ivan')]
    public function ivan(): Response
    {
        return $this->render('ivan/index.html.twig', [
            'controller_name' => 'IvanController',
        ]);
    }

    #[Route('/pierre', name: 'app_pierre')]
    public function pierre(): Response
    {
        return $this->render('pierre/index.html.twig', [
            'controller_name' => 'PierreController',
        ]);
    }
    #[Route('/raspoutine', name: 'app_raspoutine')]
    public function raspoutine(): Response
    {
        return $this->render('raspoutine/index.html.twig', [
            'controller_name' => 'RaspoutineController',
        ]);
    }
}
