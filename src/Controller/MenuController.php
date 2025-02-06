<?php
namespace App\Controller;

use App\Repository\MenuRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{#[Route('/menu', name: 'app_menu_index')]
    public function menu(MenuRepository $menuRepo): Response
    {
        $menus = $menuRepo->findAll();
        return $this->render('menu/index.html.twig', [
            'allMenus' => [
                'menus' => $menus,
               
            ],
        ]);
 
    }
    

    #[Route('/menu/{lang}', name: 'app_menu_lang')]
    public function menuByLanguage(MenuRepository $menuRepo, string $lang): Response
    {
        $menus = $menuRepo->findAll();

        $template = match ($lang) {
            'ru' => 'menu/russian.html.twig',
            'en' => 'menu/englishMenu.html.twig',
            'es' => 'menu/castellanoMenu.html.twig',
            default => 'menu/index.html.twig',
        };

        return $this->render($template, [
            'menus' => $menus,
        ]);
    }
}
