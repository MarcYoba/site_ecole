<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Enseignant;
use App\Form\EnseignantType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnseignantController extends AbstractController
{
    #[Route('/sg/enseignant/create', name: 'app_enseignant_create')]
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

    #[Route('/sg/enseignant/liste', name: 'app_enseignant_liste')]
    public function liste(EntityManagerInterface $em): Response
    {
        $ensignants = $em->getRepository(Enseignant::class)->findAll();
        return $this->render('enseignant/liste.html.twig', [
            'ensignants' => $ensignants,
        ]);
    }

    #[Route('/sg/enseignant/edit/{id}', name: 'app_enseignant_edit')]
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
    #[Route('/directeur/enseignant/delete/{id}', name: 'app_enseignant_delete')]
    public function delete(EntityManagerInterface $em, $id) : Response 
    {
        $ensignants = $em->getRepository(Enseignant::class)->findOneBy(['id' => $id]);
        if (!$ensignants) {
            return $this->redirectToRoute('app_enseignant_liste');
        }
        $em->remove($ensignants);
        $em->flush();
        
        return $this->redirectToRoute('app_enseignant_liste');
    }
    #[Route('/sg/enseignant/print/{id}', name: 'app_enseignant_print')]
    public function print(EntityManagerInterface $em, int $id) :Response {
        $enseignant = $em->getRepository(Enseignant::class)->find($id);
        if (!$enseignant) {
            return $this->redirectToRoute('app_enseignant_liste');
        }
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        $ecole = $em->getRepository(Ecole::class)->findOneBy(["id"=> 1]);

        $html = $this->renderView('eleve/print.html.twig', [
            'enseignant' => $enseignant,
            'date' => date("Y-m-d"),
            'ecole' => $ecole,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "fiche_".$enseignant->getNom().".pdf";
        // 6. Retourner le PDF dans la réponse
        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="'.$document.'"', // 'inline' pour affichage navigateur
            ]
        );
    }
    
    
}
