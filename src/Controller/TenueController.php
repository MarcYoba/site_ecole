<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Tenue;
use App\Form\TenueType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TenueController extends AbstractController
{
    #[Route('/sg/tenue/create', name: 'app_tenue')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $tenue = new Tenue();
        $form = $this->createForm(TenueType::class, $tenue);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $typetenue = $form->get('typetenue')->getData();
            $quantite = $form->get('quantite')->getData();

            $produit = 0;
                    // '' => '',
                    // '' => '',
                
                    // 'Tenue classe et pulle' => '',
                    // 'Tenue sport et pulle' => '',
                    // 'Tenue classe, sport et pulle' => 'TCSP',
            switch ($typetenue) {
                case 'TC':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue classe"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                case 'TS':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue sport"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                case 'TP':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Pulle"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                case 'TCS':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue classe"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue sport"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                case 'TCP':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue classe"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Pulle"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;

                case 'TSP':
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue sport"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Pulle"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                
                default:
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue sport"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Pulle"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    $produit = $entityManager->getRepository(Produit::class)->findOneBy(['nom' => "Tenue classe"]);
                    if ($produit) {
                        $produit->setQuantite($produit->getQuantite()-$quantite);
                    }
                    break;
                    
            }
            $entityManager->persist($produit);
            $entityManager->persist($tenue);
            $entityManager->flush();

            return $this->redirectToRoute('app_tenue_list');
        }
        return $this->render('tenue/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/sg/tenue/list', name: 'app_tenue_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $tenues = $em->getRepository(Tenue::class)->findAll();
        return $this->render('tenue/list.html.twig', [
            'tenues' => $tenues,
        ]);
    }

    #[Route('/sg/tenue/edit/{id}', name: 'app_tenue_edit')]
    public function edit(EntityManagerInterface $em, $id,Request $request): Response
    {
        $tenue = $em->getRepository(Tenue::class)->find($id);
        if (!$tenue) {
            throw $this->createNotFoundException('Tenue not found');
        }
        $form = $this->createForm(TenueType::class, $tenue);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_tenue_list');
        }
        return $this->render('tenue/index.html.twig', [
            'form' => $form->createView(),
            'tenue' => $tenue,
        ]);
    }
}
