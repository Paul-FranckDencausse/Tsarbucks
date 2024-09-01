<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/english', name: 'app_english')]
    public function english(): Response
    {
        return $this->render('home/english.html.twig', [
            'controller_name' => 'EnglishController',
        ]);
    }

    #[Route('/russian', name: 'app_russian')]
    public function russian(): Response
    {
        return $this->render('home/russian.html.twig', [
            'controller_name' => 'RussianController',
        ]);
    }
    #[Route('/castellano', name: 'app_castellano')]
    public function castellano(): Response
    {
        return $this->render('home/castellano.html.twig', [
            'controller_name' => 'CastellanoController',
        ]);
    }
}
