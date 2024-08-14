<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associe l'utilisateur actuel à la réservation
            $reservation->setUser($this->getUser());
            
            // Persist et flush pour sauvegarder la réservation
            $entityManager->persist($reservation);  // Vous devez passer l'objet $reservation ici
            $entityManager->flush();
            
            // Vous pouvez ajouter un message flash ou une redirection après la sauvegarde
            return $this->render('reservation_success/index.html.twig', [
                'controller_name' => 'ReservationSuccessController',
            ]);
        }
        
        return $this->render('reservation/index.html.twig', [
            'reservationForm' => $form->createView(),
        ]);
    }
}
