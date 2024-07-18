<?php

// src/Controller/Pag03Controller.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pag03Controller extends AbstractController
{
    /**
     * @Route("/pag03", name="pag03")
     */
    public function index(): Response
    {
        return $this->render('pag03.html.twig');
    }
}
