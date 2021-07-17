<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\ContentCart;
use App\Entity\Product;
use App\Form\CartType;
use App\Repository\CartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/{_locale}/cart")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/all", name="cart_index", methods={"GET"})
     */
    public function index(CartRepository $cartRepository): Response
    {
        return $this->render('cart/index.html.twig', [
            'carts' => $cartRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="cart_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response // prenait une requète en paramètre à la base
    {
        $cart = new Cart();
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);

        // test création de panier quand l'utilisateur ajoute un produit au panier
        // if(!$cart){
        //     var_dump($this);
        //     $cart = new Cart();
        //     $cart->setUser($this->getUser());
        //     $cart->setPaid(false);
        //     $cart->setContentCart(new ContentCart());
            
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->persist($cart);
        //     $entityManager->flush();
        // }
        // fin de test
        

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cart);
            $entityManager->flush();

            return $this->redirectToRoute('cart_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cart/new.html.twig', [
            'cart' => $cart,
            'form' => $form
        ]);
    }

    /**
     * @Route("/{id}", name="cart_show", methods={"GET"})
     */
    public function show(Cart $cart): Response
    {
        return $this->render('cart/show.html.twig', [
            'cart' => $cart,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cart $cart): Response
    {
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cart_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cart/edit.html.twig', [
            'cart' => $cart,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="cart_delete", methods={"POST"})
     */
    public function delete(Request $request, Cart $cart): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cart->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cart_index', [], Response::HTTP_SEE_OTHER);
    }
}
