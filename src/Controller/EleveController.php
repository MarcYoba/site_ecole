<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Classe;
use App\Entity\Ecole;
use App\Entity\Inscription;
use App\Form\EleveType;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends AbstractController
{
    #[Route('/eleve/create', name: 'app_eleve')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $eleve = new Eleve();
        
        $user = $this->getUser();
        
        // $classe = $entityManager->getRepository(Classe::class)->findOneBy(["user"=>$user]);
        // if(!$classe){
        //     return $this->redirectToRoute('app_classe');
        // }

        $numero = str_pad(random_int(0, 99), 3, '0', STR_PAD_LEFT);
        $datePart = date('Ymd');
        $lettres = chr(random_int(65, 90)) . chr(random_int(65, 90));
            
        $matricule = $numero . $datePart . $lettres;
        $eleve->setMatricule($matricule);
        $form = $this->createForm(EleveType::class,$eleve);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $prenom = $form->get('prenom')->getData();
            
            $nom = mb_strtoupper($nom,'UTF-8');
            $prenom = mb_strtoupper($prenom,'UTF-8');

            $eleve->setUser($this->getUser());
            $eleve->setNom($nom);
            $eleve->setPrenom($prenom);
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', '2024-06-01 12:00:00');
            $eleve->setCreatedAt($date);
            $entityManager->persist($eleve);
            $entityManager->flush();

            return $this->redirectToRoute('app_eleve_liste');
        }
        return $this->render('eleve/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/eleve/liste', name: 'app_eleve_liste')]
    public function list(Request $request, EntityManagerInterface $entity_manager) : Response 
    {
        $eleve = $entity_manager->getRepository(Eleve::class)->findAll();

        return $this->render('eleve/list.html.twig',[
            "eleves" => $eleve
        ]);
    }

    #[Route('/eleve/details', name: 'app_eleve_details')]
    public function detais (Request $request, EntityManagerInterface $entity_manager) : Response
    {
        $eleve = $entity_manager->getRepository(Eleve::class)->findBy(["user"=> $this->getUser()]);
        $ecole = $entity_manager->getRepository(Ecole::class)->findOneBy(["user"=> $this->getUser()]);
        return $this->render('eleve/detail.html.twig',[
            "eleves" => $eleve,
            "ecoles" => $ecole,
        ]);
    }
    #[Route('/eleve/print/{id}', name: 'app_eleve_print')]
    public function print(EntityManagerInterface $em, int $id) :Response {
        $eleve = $em->getRepository(Eleve::class)->find($id);
        if (!$eleve) {
            return $this->redirectToRoute('app_eleve_liste');
        }
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permet les assets distants (CSS/images)
        $dompdf = new Dompdf($options);
        $ecole = $em->getRepository(Ecole::class)->findOneBy(["id"=> 1]);

        $html = $this->renderView('eleve/print.html.twig', [
            'eleve' => $eleve,
            'date' => date("Y-m-d"),
            'ecole' => $ecole,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // 5. Rendre le PDF
        $dompdf->render();
        $document = "fiche_".$eleve->getNom().".pdf";
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
    #[Route('/eleve/classe/{id}', name: 'app_eleve_classe')]
    public function classe(EntityManagerInterface $em, int $id) : Response {
        $classe = $em->getRepository(Classe::class)->find($id);
        if (!$classe) {
            return $this->redirectToRoute('app_classe_liste');
        }
        $eleves = $em->getRepository(Eleve::class)->findBy(["classe"=>$classe]);
        return $this->render('eleve/classe.html.twig', [
            'eleves' => $eleves,
            'classe' => $classe,
        ]);
    }
    #[Route('/eleve/edite/{id}', name: 'eleve_edite_edite')]
    public function Edit(EntityManagerInterface $em, Request $request, $id) : Response 
    {
        $eleve = $em->getRepository(Eleve::class)->findOneBy(["id" => $id]);
        if (!$eleve) {
            return $this->redirectToRoute('app_classe_liste');
        }

        $form = $this->createForm(EleveType::class,$eleve);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $prenom = $form->get('prenom')->getData();
            $nom = mb_strtoupper($nom,'UTF-8');
            $prenom = mb_strtoupper($prenom,'UTF-8');
            $eleve->setNom($nom);
            $em->persist($eleve);
            $em->flush();
            return $this->redirectToRoute('app_eleve_liste');
        }

        return $this->render('eleve/index.html.twig', [
            'form' => $form->createView(),
        ]);

    } 
    #[Route('/eleve/delete/{id}', name: 'app_eleve_delete')]
    public function delete(EntityManagerInterface $em, $id) : Response 
    {
        $eleve = $em->getRepository(Eleve::class)->findOneBy(["id" => $id]);
        if (!$eleve) {
            return $this->redirectToRoute('app_eleve_liste');
        }
        $inscription = $em->getRepository(Inscription::class)->findOneBy(['eleve' => $eleve]);
        if ($inscription) {
            return $this->redirectToRoute('app_eleve_liste');
        }

        $em->remove($eleve);
        $em->flush();

        return $this->redirectToRoute('app_eleve_liste');
    }
}
