<?php

namespace App\Controller;

use App\Entity\Note;
use App\Form\NoteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    #[Route('/note', name: 'app_note')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $user = $this->getUser();
        $note = new Note();
        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $note->setUser($user);
            $note->setCreatetAt(new \DateTime());
            $em->persist($note);
            $em->flush();
            $this->addFlash('success', 'Note ajoutée avec succès !');
            return $this->redirectToRoute('app_note_list');
        }
        return $this->render('note/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/note/list', name: 'app_note_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $notes = $em->getRepository(Note::class)->findAll();
        return $this->render('note/list.html.twig', [
            'notes' => $notes,
        ]);
    }
}
