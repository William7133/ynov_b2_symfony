<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var ProduitRepository
     */
    private $produitRepository;

    /**
     * HomeController constructor.
     * @param ProduitRepository $produitRepository
     */
    public function __construct(ProduitRepository $produitRepository)
    {
        $this->produitRepository = $produitRepository;
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        // Recherche des produits qui sont en promo
        $produits = $this->produitRepository->findBy([
            'promo' => true
        ]);

        return $this->render('home/index.html.twig', [
           'produits' => $produits
        ]);
    }


}
