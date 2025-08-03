<?php

namespace App\Controller;

use App\Entity\Mobile;
use App\Form\MobileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MobileController extends AbstractController
{
    #[Route('/mobile', name: 'app_mobile')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $mobile = new Mobile();
        $mobile = $em->getRepository(Mobile::class)->findOneBy(['user' => $this->getUser()]);
        if ($mobile) {
            if ($mobile->isStatus() == 1) {
                return $this->redirectToRoute('app_home_dashboard');
            } else {
                return $this->redirectToRoute('app_mobile_validate');
            }
            
        }
        $mobile = new Mobile();
        $form = $this->createForm(MobileType::class, $mobile);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $mobile->setCreatAt(new \DateTime());
            $mobile->setUser($this->getUser());
            $mobile->setStatus(0);
            $em->persist($mobile);
            $em->flush();

            return $this->redirectToRoute('app_mobile');
        }

        return $this->render('mobile/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/mobile/validate' , name: 'app_mobile_validate')]
    public function validate(EntityManagerInterface $em) : Response{
        return $this->render('mobile/validate.html.twig', [
            
        ]);
    }
}
