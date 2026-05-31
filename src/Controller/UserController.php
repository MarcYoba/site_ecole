<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Dom\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/directeur/user/list', name: 'app_user_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(User::class)->findAll();
        return $this->render('user/list.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route(path: '/directeur/user/edit/{id}', name:'app_user_edit')]
    public function edit(EntityManagerInterface $em, Request $request, $id, UserPasswordHasherInterface $userPasswordHasher) : Response {
        $users = $em->getRepository(User::class)->findOneBy(['id' => $id]);
        if (!$users) {
            $this->redirectToRoute('app_user_list');
        }
        $registrationForm = $this->createForm(UserType::class,$users);
        $registrationForm->handleRequest($request);
        if ($registrationForm->isSubmitted() && $registrationForm->isValid()) {
            $role = [$request->request->get('role')];
            $ecole = $em->getRepository(Ecole::class)->findOneBy(['id' => 1],['id' => 'DESC']);
            $users->setEcole($ecole->getId());
            $users->setIsVerified(true);
            $users->setRoles($role);
            $em->persist($users);
            $em->flush();
            return $this->redirectToRoute('app_user_list');
        }
        return $this->render('user/edit.html.twig', [
            'users' => $users,
            'error' => 0,
            'registrationForm' => $registrationForm->createView(),
            
        ]);
    }
}
