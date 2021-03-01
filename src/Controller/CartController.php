<?php

namespace App\Controller;

use App\Classe\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/mon-panier", name="cart")
     */
    public function index(Cart $cart)
    {
//dd($cart->get());

        return $this->render('cart/index.html.twig', [
            'cart' => $cart->get()
        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="add-to-cart")
     * @param Cart $cart
     * @param $id
     */
    public function add(Cart $cart , $id)
    {
        $cart->add($id);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/remove", name="remove-my-cart")
     * @param Cart $cart
     * @param $id
     */
    public function remove(Cart $cart)
    {
        $cart->remove();

        return $this->redirectToRoute('products');
    }







}
