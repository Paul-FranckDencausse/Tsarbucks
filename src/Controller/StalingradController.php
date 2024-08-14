<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StalingradController extends AbstractController
{
    #[Route('/stalingrad', name: 'app_stalingrad')]
    public function index(): Response
    {
        return $this->render('stalingrad/index.html.twig', [
            'controller_name' => 'StalingradController',
        ]);
    }
}
