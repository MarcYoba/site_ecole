<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Form\ClasseType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe/create', name: 'app_classe')]
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

            return $this->redirectToRoute('app_classe_delete');
        }
        return $this->render('classe/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/classe/list', name: 'app_classe_liste')]
    public function list(EntityManagerInterface $em) : Response {
        $classe = $em->getRepository(Classe::class)->findAll();

        return $this->render('classe/list.html.twig', [
          'classes' => $classe,  
        ]);
    }
    #[Route('/classe/edit/{id}', name: 'app_classe_edit')]
    public function Edit(EntityManagerInterface $em, Request $request,$id) : Response {
        $classe = $em->getRepository(Classe::class)->findOneBy(['id' => $id]);
        if (!$classe) {
            return $this->redirectToRoute('app_classe_liste');
        }
        $form = $this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($classe);
            $em->flush();
            return $this->redirectToRoute('app_classe_liste');
        }
        return $this->render('classe/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/classe/delete/{id}', name: 'app_classe_delete')]
    public function delete(EntityManagerInterface $em, $id) : Response {
        $classe = $em->getRepository(Classe::class)->findOneBy(['id' => $id]);
        if (!$classe) {
            return $this->redirectToRoute('app_classe_liste');
        }
        $eleve = $em->getRepository(Eleve::class)->findOneBy(['classe' => $classe]);
        if ($eleve) {
            return $this->redirectToRoute('app_classe_liste');
        }

        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute('app_classe_liste');
    }
}