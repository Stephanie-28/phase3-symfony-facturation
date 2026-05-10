<?php

namespace App\Controller;

use App\Form\ProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ProfilType::class);
        $form->handleRequest($request);

        return $this->render('profil/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
