<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }


    #[Route('/movies', name: 'movies')]
    public function index( ): Response
    {
        $repository = $this->em->getRepository(Movie::class);
        $movies=$repository->getClassName();
       
        // dd($movies);
        return $this->render('movies/index.html.twig');
    }

   

   
}
 