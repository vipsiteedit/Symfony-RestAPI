<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipientController extends AbstractController
{
    /**
     * @Route("/recipient", name="recipient")
     */
    public function index()
    {
        return $this->json([
            'controller_name' => 'RecipientController',
        ]);
    }
}
