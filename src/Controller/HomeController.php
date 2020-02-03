<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param ProductRepository $repo
     * @return Response
     */
    public function index(ProductRepository $repo)
    {
        $products = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $products
        ]);
    }


    /**
     * @Route("/product/{id}", name="show_product")
     * @param Product $product
     * @return Response
     */
    public function show(Product $product){

        return $this->render('home/product.html.twig',[
                'product' => $product
        ]);
    }
}
