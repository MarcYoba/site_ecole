<?php

namespace App\Controller;

use App\Entity\Inscription;
use App\Entity\Solde;
use App\Entity\Tenue;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class CaisseController extends AbstractController
{
    #[Route('/sg/caisse/statistique', name: 'app_caisse')]
    public function index(ChartBuilderInterface $chartBuilder, EntityManagerInterface $em): Response
    {
        $insription=[0,0,0,0,0,0,0];
        $tabsolde = [0,0,0,0,0,0,0];
        $tabtenue = [0,0,0,0,0,0,0];

        date_default_timezone_set('Africa/Douala');
        // Récupère le lundi de la semaine actuelle
        $premierJour = date('Y-m-d', strtotime('monday this week'));

        for ($i=0; $i < 7; $i++) {
            $insription[$i] = $em->getRepository(Inscription::class)->findBySommeInscriptionDate(date("Y-m-d", strtotime($premierJour. " + $i day")));
            $tabsolde[$i] = $em->getRepository(Solde::class)->findBySommeSoldeDate(date("Y-m-d", strtotime($premierJour. " + $i day")));
            $tabtenue[$i] = $em->getRepository(Tenue::class)->findBySommeTenueDate(date("Y-m-d", strtotime($premierJour. " + $i day")));
        }
        // Définit le fuseau horaire (ex: Europe/Paris ou Africa/Douala)
        
        // Ajouter 1 jour
        // $date->modify('+1 day');
        // echo "Demain : " . $date->format('d-m-Y') . "<br>";
        // // Ajouter 1 semaine
        // $date->modify('+1 week');
        // echo "Dans une semaine : " . $date->format('d-m-Y') . "<br>";

        // // Ajouter 2 mois et 3 ans
        // $date->modify('+2 months +3 years');
        // echo "Plus tard : " . $date->format('d-m-Y') . "<br>";
        // 2. Créer une instache de graphique pour la caisse
        
        $caisse = $chartBuilder->createChart(Chart::TYPE_LINE);

        // 2. Configurer les données pour la caisse
        $caisse->setData([
            'labels' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            'datasets' => [
                [
                    'label' => 'Caisse',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)', // Couleur de fond sous la courbe
                    'borderColor' => 'rgb(255, 99, 132)',         // Couleur de la ligne
                    'data' => $insription, // Vos valeurs
                    'tension' => 0.3,                              // Arrondit la courbe (0 = ligne droite)
                ],
            ],
        ]);

        // 3. Options de configuration (Optionnel)
        $caisse->setOptions([
            'responsive' => true,
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                ],
            ],
        ]);

        // =====================================================================
            // graphique des solde
        // =====================================================================

        $solde = $chartBuilder->createChart(Chart::TYPE_LINE);

        $solde->setData([
            'labels' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            'datasets' => [
                [
                    'label' => 'Caisse',
                    'backgroundColor' => 'rgba(99, 255, 159, 0.2)', // Couleur de fond sous la courbe
                    'borderColor' => 'rgb(139, 97, 255)',         // Couleur de la ligne
                    'data' => $tabsolde, // Vos valeurs
                    'tension' => 0.3,                              // Arrondit la courbe (0 = ligne droite)
                ],
            ],
        ]);

        $caisse->setOptions([
            'responsive' => true,
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                ],
            ],
        ]);

        // =====================================================================
            // graphique des tenue
        // =====================================================================

        $tenue = $chartBuilder->createChart(Chart::TYPE_LINE);
        $tenue->setData([
            'labels' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            'datasets' => [
                [
                    'label' => 'Caisse',
                    'backgroundColor' => 'rgba(245, 255, 99, 0.87)', // Couleur de fond sous la courbe
                    'borderColor' => 'rgb(255, 252, 97)',         // Couleur de la ligne
                    'data' => $tabtenue, // Vos valeurs
                    'tension' => 0.3,                              // Arrondit la courbe (0 = ligne droite)
                ],
            ],
        ]);

        $tenue->setOptions([
            'responsive' => true,
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                ],
            ],
        ]);

        return $this->render('caisse/index.html.twig', [
            'caisse' => $caisse,
            'insription' => $insription,
            'solde' => $solde,
            'tabsolde' => $tabsolde,
            'tabtenue' => $tabtenue,
            'tenues' => $tenue,
        ]);
    }
}
