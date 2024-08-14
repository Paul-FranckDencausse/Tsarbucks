<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RaspoutineController extends AbstractController
{
    #[Route('/raspoutine', name: 'app_raspoutine')]
    public function index(): Response
    {
        return $this->render('raspoutine/index.html.twig', [
            'controller_name' => 'RaspoutineController',
        ]);
    }
}
