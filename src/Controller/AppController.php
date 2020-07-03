<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Produit;
use App\Entity\ProduitSearch;
use App\Form\ContactType;
use App\Form\ProduitSearchType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(ProduitRepository $produitRepository)
    {
        return $this->render('app/accueil.html.twig', [
            'produits' =>$produitRepository->findProduitPromotion(),
            'lastProduits' => $produitRepository->findLatest()
        ]);
    }

    /**
     * @Route("/produits", name="produit_liste", methods={"GET","POST"})
     * @return Response
     */
    public function listeProduits(ProduitRepository $produitRepository, Request $request): Response
    {
        $search = new ProduitSearch();
        $form = $this->createForm(ProduitSearchType::class,$search);
        $form->handleRequest($request);
        $produits = $produitRepository->findSearch($search);

  
        return $this->render('app/produits.html.twig', [
            'produits' =>$produits,
            'form' => $form->createView()
            ]);
    }

    /**
     * @Route("produits/{id}", name="produit_detail", methods={"GET"})
     */
    public function ficheProduit(Produit $produit): Response
    {
        return $this->render('app/fiche_produit.html.twig', [
            'produit' => $produit,

        ]);
    }
    /**
     * @Route("/contact", name="contact_new", methods={"GET","POST"})
     */
    public function Contact(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $contact->setCreated(new \DateTime('now'));
            $contact->setContactDate(new \DateTime('now'));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            $this->addFlash('success', 'Envoyer avec succès');

            return $this->redirectToRoute('produit_liste');
        }

        return $this->render('app/contact.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

    

  
}
