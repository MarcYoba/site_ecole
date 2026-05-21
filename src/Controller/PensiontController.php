<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Pensiont;
use App\Entity\Solde;
use App\Form\PensiontType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PensiontController extends AbstractController
{
    #[Route('/directeur/pensiont/create', name: 'app_pensiont')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $pensiont = new Pensiont();
        $form = $this->createForm(PensiontType::class,$pensiont);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $date = $form->get('createtAt')->getData();
            $deja = $em->getRepository(Pensiont::class)->findOneBy(['createtAt' => $date]);
            if ($deja) {
                return $this->redirectToRoute('app_pensiont_list');
            }
            
            $em->persist($pensiont);
            $em->flush();
            return $this->redirectToRoute('app_pensiont_list');
        }

        return $this->render('pensiont/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/directeur/pensiont/list', name: 'app_pensiont_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $pensionts = $em->getRepository(Pensiont::class)->findAll();
        return $this->render('pensiont/list.html.twig', [
            'pensionts' => $pensionts,
        ]);
    }
    #[Route('/directeur/pensiont/edit/{id}', name: 'app_pensiont_edit')]
    public function edit(EntityManagerInterface $em,Request $request, $id): Response
    {
        $pensiont = $em->getRepository(Pensiont::class)->find($id);
        if (!$pensiont) {
            return $this->redirectToRoute('app_pensiont_list');
        }
        $form = $this->createForm(PensiontType::class, $pensiont);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($pensiont);
            $em->flush();
            return $this->redirectToRoute('app_pensiont_list');
        }
        return $this->render('pensiont/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/directeur/pensiont/delete/{id}', name: 'app_pensiont_delete')]
    public function delete(EntityManagerInterface $em, $id): Response
    {
        $pensiont = $em->getRepository(Pensiont::class)->find($id);
        if (!$pensiont) {
            return $this->redirectToRoute('app_pensiont_list');
        }
        $em->remove($pensiont);
        $em->flush();
        return $this->redirectToRoute('app_pensiont_list');
    }
    #[Route('/sg/pensiont/montant', name: 'app_pensiont_montant')]
    public function montant(EntityManagerInterface $em, Request $request): Response
    {
        if ($request->isXmlHttpRequest() || $request->getContentType()==='json') {
            $json = $request->getContent();
            $donnees = json_decode($json, true);

            $eleve = $em->getRepository(Eleve::class)->find($donnees['eleve']);
            $solde = $em->getRepository(Solde::class)->findOneBy(['eleve' => $eleve],['id'=>'DESC']);
            if ($solde) {
                return $this->json([
                    'success' => $solde->getReste()
                    ], 
                    200
                ); 
            }else{
                $classe = $em->getRepository(Classe::class)->find($donnees['classe']);
                $pensiont = $classe->getPensiont();

                return $this->json([
                    'success' => $pensiont->getMontant()
                    ], 
                    200
                ); 
            }

            return $this->json([
                'success' => $donnees
                ], 
                200
            );
        }


        return $this->json([
            'error' => 'Erreur de transfert de la donnee'
            ], 
            404
        );
    }
}
