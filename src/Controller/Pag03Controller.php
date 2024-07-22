<?php

// src/Controller/Pag03Controller.php

namespace App\Controller;

use App\Entity\FormData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pag03Controller extends AbstractController
{
    #[Route('/pag03', name: 'pag03')]
    public function index(): Response
    {
        return $this->render('pag03.html.twig');
    }

    #[Route('/submit-pag03', name: 'process_pag03', methods: ['POST'])]
    public function processPag03(Request $request, EntityManagerInterface $entityManager): Response
    {
        $latitude = $request->request->get('latitude');
        $longitude = $request->request->get('longitude');
        $descricao = $request->request->get('descricao');

        $formData = new FormData();
        $formData->setLatitude($latitude);
        $formData->setLongitude($longitude);
        $formData->setDescricao($descricao);

        $entityManager->persist($formData);
        $entityManager->flush();

        return $this->redirectToRoute('pag03');
    }
}

