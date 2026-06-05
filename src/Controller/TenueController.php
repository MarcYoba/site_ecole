<?php

namespace App\Controller;

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
