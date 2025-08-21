<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Classe;
use App\Entity\Ecole;
use App\Form\EleveType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends AbstractController
{
    #[Route('/eleve', name: 'app_eleve')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $eleve = new Eleve();
        
        $user = $this->getUser();
        
        $classe = $entityManager->getRepository(Classe::class)->findOneBy(["user"=>$user]);
        if(!$classe){
            return $this->redirectToRoute('app_classe');
        }

        $form = $this->createForm(EleveType::class,$eleve);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $eleve->setUser($this->getUser());
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', '2024-06-01 12:00:00');
            $eleve->setCreatedAt($date);
            $entityManager->persist($eleve);
            $entityManager->flush();

            return $this->redirectToRoute('app_home_dashboard');
        }
        return $this->render('eleve/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/eleve/liste', name: 'app_eleve_liste')]
    public function list(Request $request, EntityManagerInterface $entity_manager) : Response 
    {
        $eleve = $entity_manager->getRepository(Eleve::class)->findBy(["user"=> $this->getUser()]);

        return $this->render('eleve/list.html.twig',[
            "eleves" => $eleve
        ]);
    }

    #[Route('/eleve/details', name: 'app_eleve_details')]
    public function detais (Request $request, EntityManagerInterface $entity_manager) : Response
    {
        $eleve = $entity_manager->getRepository(Eleve::class)->findBy(["user"=> $this->getUser()]);
        $ecole = $entity_manager->getRepository(Ecole::class)->findOneBy(["user"=> $this->getUser()]);
        return $this->render('eleve/detail.html.twig',[
            "eleves" => $eleve,
            "ecoles" => $ecole,
        ]);
    }
}
