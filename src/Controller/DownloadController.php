<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Classe;
use App\Entity\Ecole;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class DownloadController extends AbstractController
{
    #[Route('/download', name: 'app_download')]
    public function index(EntityManagerInterface $entityManager): Response
    {
         // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $eleve = $entityManager->getRepository(Eleve::class)->findBy(["user"=> $this->getUser()]);
        $ecole = $entityManager->getRepository(Ecole::class)->findOneBy(["user"=> $this->getUser()]);

        // HTML content
        $html = $this->renderView('download/download.html.twig', [
            'eleves' => $eleve ,
            'ecoles' => $ecole
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="document.pdf"'
            ]
        );
    }
}
