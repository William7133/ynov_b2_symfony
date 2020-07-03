<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i<=5;$i++){
            $produit = new Produit();
            $produit->setDescription("Produit numéro ".$i);
            $produit->setCreated(new \DateTime());
            $produit->setName("Produit ". $i);
            $produit->setPicture(sprintf("http://lorempixel.com/400/200/technics/%d",$i));
            $produit->setPromo(false);
            $manager->persist($produit);
        }

        $manager->flush();
    }
}
