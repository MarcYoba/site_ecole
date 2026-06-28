<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Classe;
use App\Entity\Ecole;
use App\Entity\Eleve;
use App\Entity\Enseignant;
use App\Entity\Inscription;
use App\Entity\Matiere;
use App\Entity\Note;
use App\Entity\Pensiont;
use App\Entity\Solde;
use App\Entity\Tenue;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        date_default_timezone_set('Africa/Douala');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('directeur/home/dashboard', name: 'app_home_dashboard')]
    public function Dashboard(EntityManagerInterface $em,ChartBuilderInterface $chartBuilder): Response
    {
        date_default_timezone_set('Africa/Douala');
        $ecole  = $em->getRepository(Ecole::class)->find(1);
        $classCount = $em->getRepository(Classe::class)->findAll();
        $eleve = $em->getRepository(Eleve::class)->findAll();
        $enseignant = $em->getRepository(Enseignant::class)->findAll();
        $matiere = $em->getRepository(Matiere::class)->findAll();
        $note = $em->getRepository(Note::class)->findAll();
        $listuser = $em->getRepository(User::class)->findAll();
        $pensiont1 = $em->getRepository(Pensiont::class)->findBy(['niveau' => 1]);
        $pensiont2 = $em->getRepository(Pensiont::class)->findBy(['niveau' => 2]);
        $sommeInscription = $em->getRepository(Inscription::class)->findBySommeInscriptionYear(date("Y"));
        $sommeSolde = $em->getRepository(Solde::class)->findBySommeSoldeYear(date("Y"));
        $sommeTenue = $em->getRepository(Tenue::class)->findBySommeTenueYear(date("Y"));
        $sorticaisse = $em->getRepository(Caisse::class)->findBySommeSortieCaisse(date("Y"));
        $entrecaisse = $em->getRepository(Caisse::class)->findBySommeEntreCaisse(date("Y"));
        $fille = $em->getRepository(Eleve::class)->findBy(['sexe' => "F"]);
        $garcon = $em->getRepository(Eleve::class)->findBy(['sexe' => "H"]);

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

        $chartfillegarcon = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);

        // 2. Ajouter les données et les couleurs exactes de votre image
        $chartfillegarcon->setData([
            'labels' => ['Fille', 'Garcon'],
            'datasets' => [
                [
                    'data' => [count($fille), count($garcon)], // Vos valeurs
                    'backgroundColor' => [
                        '#4e73df', // Bleu (Achat)
                        '#1cc88a', // Vert (Vente)
                        '#36b9cc', // Turquoise (Dette)
                        '#f6c23e'  // Jaune (Versement)
                    ],
                    'borderWidth' => 5,
                    'borderColor' => '#ffffff',
                ],
            ],
        ]);

        // 3. Ajouter les options d'affichage pour la légende en bas avec des ronds
        $chartfillegarcon->setOptions([
            'maintainAspectRatio' => false,
            'cutout' => '68%', // Épaisseur de l'anneau central
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => [
                        'usePointStyle' => true, // Transforme les carrés de légende en ronds
                        'boxWidth' => 12,
                        'padding' => 25,
                    ]
                ]
            ]
        ]);

        return $this->render('home/Dashboard.html.twig', [
            'controller_name' => 'HomeController',
            'monGraphique' => $chart,
            'ecole' => $ecole,
            'pensiont1' => $pensiont1,
            'pensiont2' => $pensiont2,
            'enseignantCount' => $enseignantCount,
            'enseignants' => $enseignant,
            'sommeinscription' => $sommeInscription,
            'sommesolde' => $sommeSolde,
            'sommetenue' => $sommeTenue,
            'sortiecaisse' => $sorticaisse,
            'entrecaisse' => $entrecaisse,
            'monGraphique' => $chartfillegarcon,
        ]);
    }
    #[Route('/visiteur/new', name: 'app_visiteur')]
    public function visiteur(): Response
    {
        return $this->render('home/visiteur.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('sg/surveillant/generale', name: 'app_surveillant')]
    public function surveillant(EntityManagerInterface $em,ChartBuilderInterface $chartBuilder): Response
    {
        $eleve = $em->getRepository(Eleve::class)->findAll();
        $fille = $em->getRepository(Eleve::class)->findBy(['sexe' => "F"]);
        $garcon = $em->getRepository(Eleve::class)->findBy(['sexe' => "H"]);
        // 1. Créer le graphique de type Doughnut (Anneau)
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);

        // 2. Ajouter les données et les couleurs exactes de votre image
        $chart->setData([
            'labels' => ['Fille', 'Garcon'],
            'datasets' => [
                [
                    'data' => [count($fille), count($garcon)], // Vos valeurs
                    'backgroundColor' => [
                        '#4e73df', // Bleu (Achat)
                        '#1cc88a', // Vert (Vente)
                        '#36b9cc', // Turquoise (Dette)
                        '#f6c23e'  // Jaune (Versement)
                    ],
                    'borderWidth' => 5,
                    'borderColor' => '#ffffff',
                ],
            ],
        ]);

        // 3. Ajouter les options d'affichage pour la légende en bas avec des ronds
        $chart->setOptions([
            'maintainAspectRatio' => false,
            'cutout' => '68%', // Épaisseur de l'anneau central
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => [
                        'usePointStyle' => true, // Transforme les carrés de légende en ronds
                        'boxWidth' => 12,
                        'padding' => 25,
                    ]
                ]
            ]
        ]);
        return $this->render('home/surveillant.html.twig', [
            'eleves' => $eleve,
            'monGraphique' => $chart,
        ]);
    }
    #[Route('/enseignant/generale', name: 'app_enseignant')]
    public function enseignant(EntityManagerInterface $em): Response
    {
        $matiere = $em->getRepository(Matiere::class)->findAll();
        return $this->render('home/enseignant.html.twig', [
            'matieres' => $matiere,
        ]);
    }
    #[Route('/error', name: 'app_error')]
    public function error(): Response
    {
        return $this->render('error/password.html.twig', [
            
        ]);
    }
}
