<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Inscription;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    #[Route('/sg/inscription/crteat', name: 'app_inscription')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $inscription = new Inscription();
        $form = $this->createForm(InscriptionType::class, $inscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $eleve = $form->get('eleve')->getData();
            $inscrit = $em->getRepository(Inscription::class)->findOneBy(['eleve' => $eleve]);
            if ($inscrit) {
                return $this->redirectToRoute('app_inscription_list');
            }
            $em->persist($inscription);
            $em->flush();
            return $this->redirectToRoute('app_inscription_list');
        }
        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/sg/inscription/list', name: 'app_inscription_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $inscription = $em->getRepository(Inscription::class)->findAll();
        return $this->render('inscription/list.html.twig', [
            'inscriptions' => $inscription,
        ]);
    }

    #[Route('/directeur/inscription/facture/{id}', name: 'app_inscription_facture')]
    public function facture(EntityManagerInterface $em, int $id): Response
    {
        $facture = $em->getRepository(Inscription::class)->find($id);
        if (!$facture) {
            return $this->redirectToRoute('app_inscription_list');
        }

        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        $ecole = $em->getRepository(Ecole::class)->find(1);
        $html = $this->renderView('inscription/facture.html.twig', [
            'factures' => $facture,
            'ecoles' => $ecole,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "facture_".$facture->getId().".pdf";
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
    #[Route('/directeur/inscription/edit/{id}', name: 'app_inscription_edit')]
    public function Edit(EntityManagerInterface $em, Request $request, $id) : Response 
    {
        $inscription = $em->getRepository(Inscription::class)->findOneBy(['id' => $id]);
        if (!$inscription) {
            return $this->redirectToRoute('app_inscription_list');  
        } 
        $form = $this->createForm(InscriptionType::class, $inscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($inscription);
            $em->flush();
            return $this->redirectToRoute('app_inscription_list');
        }
        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);  
    }
    #[Route('/sg/inscription/detail/{id}', name: 'app_inscription_detail')]
    public function detail(EntityManagerInterface $em, $id) : Response {
        $facture = $em->getRepository(Inscription::class)->find($id);
        if (!$facture) {
            return $this->redirectToRoute('app_inscription_list');
        }

        
        $ecole = $em->getRepository(Ecole::class)->find(1);
        return $this->render('inscription/detaille.html.twig', [
            'factures' => $facture,
            'ecoles' => $ecole,
        ]);
    }

    #[Route('/sg/inscription/facture/{id}', name: 'app_inscription_facture_sg')]
    public function facture_sg(EntityManagerInterface $em, int $id): Response
    {
        $facture = $em->getRepository(Inscription::class)->find($id);
        if (!$facture) {
            return $this->redirectToRoute('app_inscription_list');
        }
        if ($facture->getStatus() == 1) {
            return $this->redirectToRoute('app_inscription_list');
        }else{
            $facture->setStatus(1);
            $em->persist($facture);
            $em->flush();
        }
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        $ecole = $em->getRepository(Ecole::class)->find(1);
        $html = $this->renderView('inscription/facture.html.twig', [
            'factures' => $facture,
            'ecoles' => $ecole,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "facture_".$facture->getId().".pdf";
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
