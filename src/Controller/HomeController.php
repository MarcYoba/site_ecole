<?php

namespace App\Controller;

use App\Entity\Classe;
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
        return $this->render('home/Dashboard.html.twig', [
            'controller_name' => 'HomeController',
            'classCount' => count($classCount),
        ]);
    }
}
