<?php

namespace App\Controller;

use App\Repository\ArtworkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArtworkController extends AbstractController
{
  #[Route('/artwork', name: 'app_artwork_index', methods: ['GET'])]
  public function index(ArtworkRepository $artworkRepository): Response
  {
    $artworks = $artworkRepository->findAll();

    return $this->render('artwork/index.html.twig', [
      'artworks' => $artworks,
    ]);
  }
}
