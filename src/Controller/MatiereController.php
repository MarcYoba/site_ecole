<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Form\MatiereType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatiereController extends AbstractController
{
    #[Route('/matiere', name: 'app_matiere')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $user = $this->getUser();
        $matier = new Matiere();
        $form = $this->createForm(MatiereType::class, $matier);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $mat = $form->get('nom')->getData();
            $existingMatiere = $em->getRepository(Matiere::class)->findOneBy(['nom' => $mat]);
            if ($existingMatiere) {
                $this->addFlash('error', 'Une matière avec ce nom existe déjà !');
                return $this->redirectToRoute('app_matiere_list');
            }
            $matier->setUser($user);
            $em->persist($matier);
            $em->flush();

            $this->addFlash('success', 'Matiere ajoutée avec succès !');

            return $this->redirectToRoute('app_matiere_list');
        }
        return $this->render('matiere/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/matiere/list', name: 'app_matiere_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $matieres = $em->getRepository(Matiere::class)->findAll();

        return $this->render('matiere/list.html.twig', [
            'matieres' => $matieres,
        ]);
    }
}
