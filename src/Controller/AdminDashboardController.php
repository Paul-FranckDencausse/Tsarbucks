<?php
// src/Controller/AdminDashboardController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index(): Response
    {
        // Vérifie si l'utilisateur a le rôle d'admin
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/admin/users', name: 'admin_manage_users')]
public function manageUsers(): Response
{
    // Logic for managing users
     // Vérifie si l'utilisateur a le rôle d'admin
     $this->denyAccessUnlessGranted('ROLE_ADMIN');


    return $this->render('admin/users.html.twig');
}

}
