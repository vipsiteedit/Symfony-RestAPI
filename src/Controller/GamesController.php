<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

class GamesController extends AbstractController
{
    /**
     * @Rest\Get("/api/games", name="get_games")
     */
    public function getGames()
    {
        return $this->json([
            'controller_name' => 'GET',
        ]);
    }
	
	/**
     * @Rest\Post("/api/games", name="post_games")
     */
    public function postGames()
    {
        return $this->json([
            'controller_name' => 'Post',
        ]);
    }
	
	/**
     * @Rest\Patch("/games", name="Patch_games")
     */
    public function patchGames()
    {
        return $this->json([
            'controller_name' => 'Patch',
        ]);
    }
	
}
