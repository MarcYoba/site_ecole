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
    #[Route('/ecole', name: 'app_ecole')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $ecole = new Ecole();
        $form = $this->createForm(EcoleType::class, $ecole);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ecole->setUser($this->getUser());
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('app_ecole');
        }

        return $this->render('ecole/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
