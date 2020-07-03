<?php


namespace App\Controller;


use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @var ProduitRepository
     */
    private $produitRepository;

    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * HomeController constructor.
     * @param ProduitRepository $produitRepository
     */
    public function __construct(ProduitRepository $produitRepository, SessionInterface $session)
    {
        $this->produitRepository = $produitRepository;
        $this->session = $session;
    }

    /**
     * @Route("/list_produits",name="liste_produits")
     */
    public function getAllProduits(){

        // Recherche de tous les produits stockés dans la bd
        $produits = $this->produitRepository->findAll();

        return $this->render('produits/index.html.twig', [
            'produits' => $produits
        ]);
    }

    /**
     * Récupérer toutes les informations concernant un produit
     * @Route("/list_produits/details/{id}", name="details_produit")
     * @param Produit $produit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProduitInfos(Produit $produit){

        return $this->render('produits/details_produit.html.twig', [
            'produit' => $produit
        ]);
    }

    /**
     * @Route("panier", name="panier")
     */
    public function getPanier(){
        $panier = $this->session->get("panier", []);

        $panierProduits = [];
        if(count($panier) > 0){
            foreach($panier as $key => $value){
                $panierProduits[] = [
                    'produit' => $this->produitRepository->findOneBy(['id' => $value])
                ];
            }
        }
        return $this->render("panier/panier.html.twig", [
            'produits' => $panierProduits
        ]);
    }

    /**
     * @Route("/panier/ajouter_produit/{id}", name="ajouter_produit_session")
     * @param Produit $produit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ajouterProduitAuPanier(Produit $produit){

        $panier = $this->session->get("panier", []);
        if(!in_array($produit->getId(),$panier)){
            $panier[] = $produit->getId();
            $this->session->set("panier", $panier);
        }

        $panierProduits = [];
        foreach($panier as $key => $value){
            $panierProduits[] = [
                'produit' => $this->produitRepository->findOneBy(['id' => $value])
            ];
        }

        return $this->redirectToRoute("panier" , [
            'produits' => $panierProduits
        ]);
    }

    /**
     * @Route("/panier/supprimer_produit/{id}", name="supprimer_produit_session")
     * @param Produit $produit
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function supprimerProduit(Produit $produit){
        $panier = $this->session->get("panier", []);
        foreach($panier as $p => $value){
            if($value == $produit->getId()){
                unset($panier[$p]);
            }
        }
        $this->session->set("panier", $panier);

        return $this->redirectToRoute("panier");
    }

    /**
     * @Route("/panier/vider",name="vider_panier")
     */
    public function viderPanier(){

        $panier = $this->session->get("panier", []);
        foreach($panier as $p => $value){
                unset($panier[$p]);
        }

        $this->session->set("panier", $panier);

        return $this->redirectToRoute("panier");
    }
}
