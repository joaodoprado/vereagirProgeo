<?php

// src/Controller/Pag02Controller.php

namespace App\Controller;

use App\Entity\FormData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pag02Controller extends AbstractController
{
    #[Route('/pag02', name: 'pag02')]
    public function index(): Response
    {
        return $this->render('pag02.html.twig');
    }

    #[Route('/submit-pag02', name: 'process_pag02', methods: ['POST'])]
    public function processPag02(Request $request, EntityManagerInterface $entityManager): Response
    {
        $campo3 = $request->request->get('campo3');
        $campo4 = $request->request->get('campo4');

        $formData = new FormData();
        $formData->setCampo3($campo3);
        $formData->setCampo4($campo4);

        $entityManager->persist($formData);
        $entityManager->flush();

        return $this->redirectToRoute('pag02');
    }
}
