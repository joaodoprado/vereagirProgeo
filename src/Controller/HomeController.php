<?php

// src/Controller/Pag01Controller.php

namespace App\Controller;

use App\Entity\FormData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pag01Controller extends AbstractController
{
    #[Route('/pag01', name: 'pag01')]
    public function index(): Response
    {
        return $this->render('pag01.html.twig');
    }

    #[Route('/submit-pag01', name: 'process_pag01', methods: ['POST'])]
    public function processPag01(Request $request, EntityManagerInterface $entityManager): Response
    {
        $campo1 = $request->request->get('campo1');
        $campo2 = $request->request->get('campo2');

        $formData = new FormData();
        $formData->setCampo1($campo1);
        $formData->setCampo2($campo2);

        $entityManager->persist($formData);
        $entityManager->flush();

        return $this->redirectToRoute('pag01');
    }
}
