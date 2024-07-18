<?php

// src/Controller/Pag02Controller.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pag02Controller extends AbstractController
{
    /**
     * @Route("/pag02", name="pag02")
     */
    public function index(): Response
{
    return $this->render('pag02.html.twig');
}
}
