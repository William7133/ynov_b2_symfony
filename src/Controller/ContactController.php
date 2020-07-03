<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class ContactController extends AbstractController
{

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param EntityManager $em
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function index(Request $request, EntityManagerInterface $em)
    {
        // Creation d'un nouveau objet
        $contact = new Contact();

        // Creation du formulaire
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contact->setCreated(new \DateTime());
            $contact->setContactDate(new \DateTime());
            $em->persist($contact);
            $em->flush();
            $this->addFlash("success" ,"Votre message est envoyé. Merci ! .");
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
