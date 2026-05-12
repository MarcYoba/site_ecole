<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Enseignant;
use App\Entity\Matiere;
use App\Entity\Note;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home/dashboard', name: 'app_home_dashboard')]
    public function Dashboard(EntityManagerInterface $em): Response
    {
        $classCount = $em->getRepository(Classe::class)->findAll();
        $eleve = $em->getRepository(Eleve::class)->findAll();
        $enseignant = $em->getRepository(Enseignant::class)->findAll();
        $matiere = $em->getRepository(Matiere::class)->findAll();
        $note = $em->getRepository(Note::class)->findAll();

        return $this->render('home/Dashboard.html.twig', [
            'controller_name' => 'HomeController',
            'classCount' => count($classCount),
            'eleveCount' => count($eleve),
            'enseignantCount' => count($enseignant),
            'matiereCount' => count($matiere),
            'noteCount' => count($note),
        ]);
    }
}
