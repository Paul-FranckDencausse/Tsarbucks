<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Repository\MenuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin/menu')]
final class AdminMenuController extends AbstractController
{
    #[Route(name: 'app_admin_menu_index', methods: ['GET'])]
    public function index(MenuRepository $menuRepository): Response
    {
        return $this->render('admin_menu/index.html.twig', [
            'menus' => $menuRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_menu_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mediaFile = $form->get('media')->getData();

            if ($mediaFile) {
                // Utilise le nom d'origine du fichier
                $originalFilename = $mediaFile->getClientOriginalName();

                try {
                    $mediaFile->move(
                        $this->getParameter('media_directory'),
                        $originalFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Le fichier n\'a pas pu être téléversé.');
                    return $this->redirectToRoute('app_admin_menu_new', [], Response::HTTP_SEE_OTHER);
                }

                $menu->setImageFilename($originalFilename);
            }

            $entityManager->persist($menu);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_menu/new.html.twig', [
            'menu' => $menu,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_menu_show', methods: ['GET'])]
    public function show(Menu $menu): Response
    {
        return $this->render('admin_menu/show.html.twig', [
            'menu' => $menu,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_menu_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Menu $menu, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newMediaFile = $form->get('media')->getData();

            if ($newMediaFile) {
                // Supprime l'ancien fichier si nécessaire
                if ($menu->getImageFilename()) {
                    $oldMediaPath = $this->getParameter('media_directory') . '/' . $menu->getImageFilename();
                    if (file_exists($oldMediaPath)) {
                        unlink($oldMediaPath);
                    }
                }

                // Utilise le nom d'origine du nouveau fichier
                $originalFilename = $newMediaFile->getClientOriginalName();

                try {
                    $newMediaFile->move(
                        $this->getParameter('media_directory'),
                        $originalFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Le fichier n\'a pas pu être téléversé.');
                    return $this->redirectToRoute('app_admin_menu_edit', ['id' => $menu->getId()], Response::HTTP_SEE_OTHER);
                }

                $menu->setImageFilename($originalFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Le plat a bien été modifié.');
            return $this->redirectToRoute('app_admin_menu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_menu/edit.html.twig', [
            'menu' => $menu,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_menu_delete', methods: ['POST'])]
    public function delete(Request $request, Menu $menu, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $menu->getId(), $request->request->get('_token'))) {
            $mediaPath = $this->getParameter('media_directory') . '/' . $menu->getImageFilename();
            if (file_exists($mediaPath)) {
                unlink($mediaPath);
            }

            $entityManager->remove($menu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_menu_index', [], Response::HTTP_SEE_OTHER);
    }
}
