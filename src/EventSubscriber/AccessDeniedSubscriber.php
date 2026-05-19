<?php
// src/EventSubscriber/AccessDeniedSubscriber.php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;

class AccessDeniedSubscriber implements EventSubscriberInterface
{
    private Environment $twig;
    private Security $security;
    
    public function __construct(Environment $twig, Security $security)
    {
        $this->twig = $twig;
        $this->security = $security;
        
    }
    
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => ['onKernelException', 50]
        ];
    }
    
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        
        if (!$exception instanceof AccessDeniedException) {
            return;
        }
        
        // Récupérer l'utilisateur depuis la session (si besoin)
        $user = $user = $this->security->getUser();
        
        // Template personnalisé
        $content = $this->twig->render('error/access_denied.html.twig', [
            'message' => 'Vous n\'avez pas accès à cette ressource. Vos rôles utilisateur ne vous permettent pas d\'y accéder.',
            'user' => $user
        ]);
        
        $response = new Response($content, Response::HTTP_FORBIDDEN);
        $event->setResponse($response);
    }
}