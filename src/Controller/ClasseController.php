<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Form\ClasseType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $classe->setUser($this->getUser());
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', '2024-06-01 12:00:00');
            $classe->setCreateAt($date);
            $entityManager->persist($classe);
            $entityManager->flush();

            return $this->redirectToRoute('app_home_dashboard');
        }
        return $this->render('classe/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}