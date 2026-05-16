<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Enseignant;
use App\Entity\Matiere;
use App\Entity\Note;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

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
    public function Dashboard(EntityManagerInterface $em,ChartBuilderInterface $chartBuilder): Response
    {
        $classCount = $em->getRepository(Classe::class)->findAll();
        $eleve = $em->getRepository(Eleve::class)->findAll();
        $enseignant = $em->getRepository(Enseignant::class)->findAll();
        $matiere = $em->getRepository(Matiere::class)->findAll();
        $note = $em->getRepository(Note::class)->findAll();
        $listuser = $em->getRepository(User::class)->findAll(); 

        $classCount = count($classCount);
        $eleveCount = count($eleve);
        $enseignantCount = count($enseignant);
        $matiereCount = count($matiere);
        $noteCount = count($note);
        $userCount = count($listuser);

        // 1. Créer une instance de graphique de type "LINE" (courbe)
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);

        // 2. Configurer les données
        $chart->setData([
            'labels' => ['Classe', 'Eleve', 'Enseignant', 'Matiere', 'Note', 'Utilisateur'],
            'datasets' => [
                [
                    'label' => 'Ecole',
                    'backgroundColor' => 'rgba(43, 108, 176, 0.2)', // Couleur de fond sous la courbe
                    'borderColor' => 'rgb(43, 108, 176)',         // Couleur de la ligne
                    'data' => [$classCount, $eleveCount, $enseignantCount, $matiereCount, $noteCount, $userCount], // Vos valeurs
                    'tension' => 0.3,                              // Arrondit la courbe (0 = ligne droite)
                ],
            ],
        ]);

        // 3. Options de configuration (Optionnel)
        $chart->setOptions([
            'responsive' => true,
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                ],
            ],
        ]);

        return $this->render('home/Dashboard.html.twig', [
            'controller_name' => 'HomeController',
            'monGraphique' => $chart,
        ]);
    }
}
