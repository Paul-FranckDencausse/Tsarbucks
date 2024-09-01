<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'app_menu_index')]
    public function index(): Response
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    #[Route('/russianMenu', name: 'app_menu_russian')]
    public function russian(): Response
    {
        return $this->render('menu/russian.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}
