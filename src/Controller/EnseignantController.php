<?php

namespace App\Controller;

use App\Entity\Enseignant;
use App\Form\EnseignantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnseignantController extends AbstractController
{
    #[Route('/enseignant/create', name: 'app_enseignant')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $ensignants =  new Enseignant();
        $form = $this->createForm(EnseignantType::class, $ensignants);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $nom = mb_strtoupper($nom,'UTF-8');
            $ensignants->setNom($nom);
            $ensignants->setUser($this->getUser());
            $ensignants->setCreatetAt(new \DateTime());
            $em->persist($ensignants);
            $em->flush();
            return $this->redirectToRoute('app_enseignant_liste');
        }
        return $this->render('enseignant/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/enseignant/liste', name: 'app_enseignant_liste')]
    public function liste(EntityManagerInterface $em): Response
    {
        $ensignants = $em->getRepository(Enseignant::class)->findAll();
        return $this->render('enseignant/liste.html.twig', [
            'ensignants' => $ensignants,
        ]);
    }

    #[Route('/enseignant/edit/{id}', name: 'app_enseignant_edit')]
    public function edit(EntityManagerInterface $em, Request $request, $id) : Response 
    {
        $ensignants = $em->getRepository(Enseignant::class)->findOneBy(['id' => $id]);
        if (!$ensignants) {
            return $this->redirectToRoute('app_enseignant_liste');
        }
        $form = $this->createForm(EnseignantType::class, $ensignants);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $nom = mb_strtoupper($nom,'UTF-8');
            $ensignants->setNom($nom);
            $em->persist($ensignants);
            $em->flush();
            return $this->redirectToRoute('app_enseignant_liste');
        }
        return $this->render('enseignant/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/enseignant/delete/{id}', name: 'app_enseignant_delete')]
    public function delete(EntityManagerInterface $em, $id) : Response 
    {
        $ensignants = $em->getRepository(Enseignant::class)->findOneBy(['id' => $id]);
        if (!$ensignants) {
            return $this->redirectToRoute('app_enseignant_liste');
        }

        $em->persist($ensignants);
        $em->flush();
        
        return $this->redirectToRoute('app_enseignant_liste');
    }
    
    
}
