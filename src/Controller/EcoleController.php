<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Form\EcoleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcoleController extends AbstractController
{
    #[Route('/directeur/ecole/create', name: 'app_ecole')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $ecole = new Ecole();
        $presence = $em->getRepository(Ecole::class)->findOneBy(['user' => $this->getUser()]);
        if ($presence) {
            return $this->redirectToRoute('app_home_dashboard');
        }

        $form = $this->createForm(EcoleType::class, $ecole);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $nom = strtoupper($nom);
            $ecole->setNom($nom);
            $ecole->setUser($this->getUser());
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('app_home_dashboard');
        }

        return $this->render('ecole/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/directeur/ecole/edit/{id}', name: 'app_ecole_edit')]
    public function Edit(EntityManagerInterface $em, Request $request, $id) : Response 
    {
        $ecole = $em->getRepository(Ecole::class)->findOneBy(['id' => $id]);
        if (!$ecole) {
            return $this->redirectToRoute('app_home_dashboard');
        }
        $form = $this->createForm(EcoleType::class, $ecole);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $nom = strtoupper($nom);
            $ecole->setNom($nom);
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('app_home_dashboard');
        }
        return $this->render('ecole/index.html.twig', [
            'form' => $form->createView(),
        ]);
         
    }
}
