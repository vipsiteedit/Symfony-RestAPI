<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Auth;

class BooksController extends AbstractController
{
    /**
     * @Route("/api/books", name="api_books")
     */
    public function index()
    {
        $auths = $this->getDoctrine()->getRepository(Auth::class)->findAll();
        return $this->json($auths);
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
