<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ActivityReservation;
use App\Form\ActivityReservationType;
use Doctrine\ORM\EntityManagerInterface;

class ActivityReservationController extends AbstractController
{
    #[Route('/activity-reservation', name: 'app_activity_reservation')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new ActivityReservation();
        $form = $this->createForm(ActivityReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associe l'utilisateur actuel à la réservation
            $reservation->setUser($this->getUser());
            
            // Persist et flush pour sauvegarder la réservation
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            // Redirection vers une page de succès après la sauvegarde
            return $this->redirectToRoute('app_activity_reservation_success');
        }
        
        return $this->render('activity_reservation/index.html.twig', [
            'reservationForm' => $form->createView(),
        ]);
    }

    #[Route('/activity-reservation/success', name: 'app_activity_reservation_success')]
    public function success(): Response
    {
        return $this->render('activity_reservation/success.html.twig', [
            'controller_name' => 'ActivityReservationSuccessController',
        ]);
    }

    #[Route('/russianActivity', name: 'app_russian_activity')]
    public function russian(): Response
    {
        return $this->render('activity_reservation/russian.html.twig', [
            'controller_name' => 'ActivityReservationSuccessController',
        ]);
    }


}
