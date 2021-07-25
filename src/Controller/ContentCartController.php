<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\ContentCart;
use App\Entity\Product;
use App\Form\ContentCartType;
use App\Repository\ContentCartRepository;
use App\Repository\CartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/{_locale}/content/cart")
 */
class ContentCartController extends AbstractController
{
    /**
     * @Route("/", name="content_cart_index", methods={"GET"})
     */
    public function index(ContentCartRepository $contentCartRepository): Response
    {
        $contentCart = $contentCartRepository->findAll();

        /*$productCartArray = [];
        foreach ($contentCart as $key => $productCart) {

            if( !in_array($productCart->getProduct()->getId(), $productCartArray){


            $productCartArray[] = [
                'id' => $productCart->getProduct()->getId(),
                //'name' => $productCart->getProduct()->getName(),
                'quantity' => $productCart->getProductQty(),
            ];
        }
        }

        echo "<pre>";
        var_dump($productCartArray);
        echo "</pre>";

        var_dump($productCartArray[0]['id']);*/

/*        if (in_array(14, $productCartArray)) {
            echo "YES";
        } else { echo "NO"; }*/

        return $this->render('content_cart/index.html.twig', [
            'content_carts' => $contentCart,
        ]);
    }

    /**
     * @Route("/new", name="content_cart_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contentCart = new ContentCart();
        $form = $this->createForm(ContentCartType::class, $contentCart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contentCart);
            $entityManager->flush();

            return $this->redirectToRoute('content_cart_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('content_cart/new.html.twig', [
            'content_cart' => $contentCart,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="content_cart_show", methods={"GET"})
     */
    public function show(ContentCart $contentCart): Response
    {
        return $this->render('content_cart/show.html.twig', [
            'content_cart' => $contentCart,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="content_cart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ContentCart $contentCart): Response
    {
        $form = $this->createForm(ContentCartType::class, $contentCart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('content_cart_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('content_cart/edit.html.twig', [
            'content_cart' => $contentCart,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="content_cart_delete", methods={"POST"})
     */
    public function delete(Request $request, ContentCart $contentCart): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contentCart->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contentCart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('content_cart_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/add/{id}", name="content_cart_add", methods={"GET","POST"})
     */
    public function addToCart(Product $product)
    {
        $cart = new Cart();
        $contentCart = new ContentCart();
        $contentCart->setProduct($product);
        $contentCart->setProductQty(1);

        $entityManager = $this->getDoctrine()->getManager();

        $cart->addContentCart($contentCart);
        $cart->setPaid(false);
        $cart->setUser($this->getUser());

        $entityManager->persist($contentCart);
        $entityManager->persist($cart);
        $entityManager->flush();

        return $this->render('content_cart/show.html.twig', [
            'content_cart' => $contentCart,
        ]);
    }

    /**
     * @Route("/buy/{id}", name="content_cart_buy", methods={"POST"})
     */
    public function buy(Request $request, Cart $Cart): Response
    {
        if ($this->isCsrfTokenValid('buy'.$Cart->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getRepository(Cart::class);
            $entityManager-> buyCart($Cart->getId());
        }

        return $this->redirectToRoute('content_cart_index', [], Response::HTTP_SEE_OTHER);
    }
}
