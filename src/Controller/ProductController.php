<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private $entityManager;

    /**
     * ProductController constructor.
     * @param $entityManager
     */
    public function __construct( $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/nos-product", name="products")
     */
    public function index(): Response
    {



        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);
    }
}
