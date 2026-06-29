<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BulletinController extends AbstractController
{
    #[Route('/bulletin/classe', name: 'app_bulletin')]
    public function index(EntityManagerInterface $em): Response
    {
        return $this->render('bulletin/index.html.twig', [
            'controller_name' => 'BulletinController',
        ]);
    } 
    #[Route('/bulletin/classe/couverture', name: 'app_bulletin_couverture')]
    public function couverture(EntityManagerInterface $em): Response
    {
        return $this->render('bulletin/couverture.html.twig', [
            
        ]);
    } 
    #[Route('/bulletin/classe/copie', name: 'app_bulletin_copie')]
    public function copiebulletin(EntityManagerInterface $em): Response
    {
        return $this->render('bulletin/copie.html.twig', [
            
        ]);
    } 
}
