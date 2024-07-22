<?php

// src/Controller/FormController.php

namespace App\Controller;

use App\Entity\FormData;
use App\Repository\FormDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/submit-form", name="process_form", methods={"POST"})
     */
    public function processForm(Request $request, FormDataRepository $formDataRepository): Response
    {
        $latitude = $request->request->get('latitude');
        $longitude = $request->request->get('longitude');
        $descricao = $request->request->get('descricao');

        $formData = new FormData();
        $formData->setLatitude($latitude);
        $formData->setLongitude($longitude);
        $formData->setDescricao($descricao);

        $formDataRepository->save($formData);

        return $this->redirectToRoute('pag03');
    }
}

