<?php
namespace App\Controller;

use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CafeController extends AbstractController
{
    #[Route('/cafe', name: 'app_cafe')]
    public function index(MenuRepository $menuRepository): Response
    {
        // Récupère tous les éléments du menu
        $menus = $menuRepository->findAll();

        return $this->render('cafe/index.html.twig', [
            'menus' => $menus,
        ]);
    }
}
