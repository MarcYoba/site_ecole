<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Solde;
use App\Form\SoldeType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoldeController extends AbstractController
{
    #[Route('/solde', name: 'app_solde')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $user = $this->getUser();
        $solde = new Solde();
        $form = $this->createForm(SoldeType::class,$solde);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $solde->setUser($user);
            $em->persist($solde);
            $em->flush();

            return $this->redirectToRoute("app_solde_list");
        }
        return $this->render('solde/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/solde/list', name: 'app_solde_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $solde = $em->getRepository(Solde::class)->findAll();

        return $this->render('solde/list.html.twig', [
            'soldes' => $solde,
        ]);
    }
    #[Route('/solde/facture/{id}', name: 'app_solde_facture')]
    public function facture(EntityManagerInterface $em, $id): Response
    {
        $solde = $em->getRepository(Solde::class)->findOneBy(['id' => $id]);
        if (!$solde) {
            return $this->redirectToRoute('app_solde_list');
        }
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);

        $ecole = $em->getRepository(Ecole::class)->find(1);

        $html = $this->renderView('solde/facture.html.twig', [
            'soldes' => $solde,
            'ecoles' => $ecole,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $document = "facture_".$solde->getId().".pdf";
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
    #[Route('/solde/edit/{id}', name: 'app_solde_edit')]
    public function edit(EntityManagerInterface $em, Request $request, $id): Response
    {
        $solde = $em->getRepository(Solde::class)->findOneBy(['id' => $id]);
        if (!$solde) {
            return $this->redirectToRoute("app_solde_list");
        }

        $form = $this->createForm(SoldeType::class,$solde);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->persist($solde);
            $em->flush();

            return $this->redirectToRoute("app_solde_list");
        }
        return $this->render('solde/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
