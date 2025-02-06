<?php
// src/Service/MenuService.php
namespace App\Service;

use App\Repository\MenuRepository;
use App\Repository\SaloonMenuRepository;

class MenuService
{
    private MenuRepository $menuRepository;
  

    public function __construct(MenuRepository $menuRepository,)
    {
        $this->menuRepository = $menuRepository;
       
    }

    public function getAllMenus(): array
    {
        return [
            'menus' => $this->menuRepository->findAll(),
           
        ];
    }
}
