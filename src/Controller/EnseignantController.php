<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnseignantController extends AbstractController
{
    #[Route('/enseignant', name: 'app_enseignant')]
    public function index(): Response
    {
        return $this->render('enseignant/index.html.twig', [
            'controller_name' => 'EnseignantController',
        ]);
    }

    #[Route('/enseignant/liste', name: 'app_enseignant_liste')]
    public function liste(EntityManagerInterface $em): Response
    {
        return $this->render('enseignant/liste.html.twig', [
            'controller_name' => 'EnseignantController',
        ]);
    }
}
