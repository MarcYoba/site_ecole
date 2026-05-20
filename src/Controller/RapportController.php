<?php

namespace App\Controller;

use App\Entity\Inscription;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RapportController extends AbstractController
{
    #[Route('/rapport', name: 'app_rapport')]
    public function index(): Response
    {
        return $this->render('rapport/index.html.twig', [
            'controller_name' => 'RapportController',
        ]);
    }
    #[Route('/sg/inscription/jour', name: 'app_inscription_jour')]
    public function jour(EntityManagerInterface $em,): Response
    {
        $date = date("Y-m-d");
        $date = new \DateTime($date);
        $facture = $em->getRepository(Inscription::class)->findBy(["createtAt" => $date]);

        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        
        $html = $this->renderView('rapport/inscription_jour.html.twig', [
            'inscriptions' => $facture,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "facture_incription_du_jour.pdf";
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
    #[Route('/sg/inscription/date/jour', name: 'app_inscription_date_jour')]
    public function Date_jour(EntityManagerInterface $em,Request $request): Response
    {
        $date = date("Y-m-d");
        $date = new \DateTime($date);
        if($request->isMethod("post"))
        {
            $date = $request->request->get('date',date("Y-m-d"));
            $date = new \DateTime($date);
        }
        $facture = $em->getRepository(Inscription::class)->findBy(["createtAt" => $date]);

        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        
        $html = $this->renderView('rapport/inscription_jour.html.twig', [
            'inscriptions' => $facture,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "facture_incription_du_jour.pdf";
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
    #[Route('/sg/inscription/Semaine', name: 'app_inscription_semaine')]
    public function Semaine(EntityManagerInterface $em,Request $request): Response
    {
        $date1 = date("Y-m-d");
        $date1 = new \DateTime($date1);
        $date2 = date("Y-m-d");
        $date2 = new \DateTime($date2);

        if($request->isMethod("post"))
        {
            $date1 = $request->request->get('date1',date("Y-m-d"));
            $date1 = new \DateTime($date1);
        }
        $facture = $em->getRepository(Inscription::class)->findBySemaine($date1,$date2);

        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        
        $html = $this->renderView('rapport/inscription_jour.html.twig', [
            'inscriptions' => $facture,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "facture_incription_du_jour.pdf";
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
