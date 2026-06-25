<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Examen;
use App\Form\ExamenType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExamenController extends AbstractController
{
    #[Route('/sg/examen', name: 'app_examen')]
    public function index(EntityManagerInterface $em,Request $request): Response
    {
        $user = $this->getUser();
        $examen = new Examen();
        $form = $this->createForm(ExamenType::class,$examen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examen->setUser($user);
            $em->persist($examen);
            $em->flush();

            return $this->redirectToRoute("app_examen_list");
        }
        return $this->render('examen/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/sg/examen/list', name: 'app_examen_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $examen = $em->getRepository(Examen::class)->findAll();
        return $this->render('examen/list.html.twig', [
            'examens' => $examen,
        ]);
    }
    #[Route('/sg/examen/Edit/{id}', name: 'app_examen_edit')]
    public function edit(EntityManagerInterface $em,Request $request, int $id): Response
    {

        $user = $this->getUser();
        $examen = $em->getRepository(Examen::class)->findOneBy(['id' => $id]);
        if (!$examen) {
            return $this->redirectToRoute("app_examen_list");
        }
        $form = $this->createForm(ExamenType::class,$examen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examen->setUser($user);
            $em->persist($examen);
            $em->flush();
            return $this->redirectToRoute('app_examen_list');
        }
        return $this->render('examen/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/sg/examen/facture/{id}', name: 'app_examen_facture')]
    public function facture_sg(EntityManagerInterface $em, int $id): Response
    {
        $facture = $em->getRepository(Examen::class)->find($id);
        if (!$facture) {
            return $this->redirectToRoute('app_examen_list');
        }
        
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        $ecole = $em->getRepository(Ecole::class)->find(1);
        $html = $this->renderView('examen/facture.html.twig', [
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
