<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i<=5;$i++){
            $contact = new Contact();
            $contact->setCreated(new \DateTime());
            $contact->setContactDate(new \DateTime());
            $contact->setMessage("Message numéro ".$i);
            $contact->setEmail(sprintf("contact%d@gmail.com",$i));
            $contact->setSubject("Demande d'informations");
            $manager->persist($contact);
        }

        $manager->flush();
    }
}
