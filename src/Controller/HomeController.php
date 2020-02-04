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

    /**
     * @Route("/balcony", name="balcony")
     */
    public function balcony()
    {
        return $this->render('home/balcony.html.twig');
    }

    /**
     * @Route("/dveri", name="dveri")
     */
    public function dveri()
    {
        return $this->render('home/dveri.html.twig');
    }

    /**
     * @Route("/potolki", name="potolki")
     */
    public function potolki()
    {
        return $this->render('home/potolki.html.twig');
    }

    /**
     * @Route("/rolstavni", name="rolstavni")
     */
    public function rolstavni()
    {
        return $this->render('home/rolstavni.html.twig');
    }

    /**
     * @Route("/jhaluzi", name="jhaluzi")
     */
    public function jhaluzi()
    {
        return $this->render('home/jhaluzi.html.twig');
    }

    /**
     * @Route("/vorota", name="vorota")
     */
    public function vorota()
    {
        return $this->render('home/vorota.html.twig');
    }

    /**
     * @Route("/stellajhi", name="stellajhi")
     */
    public function stellajhi()
    {
        return $this->render('home/stellajhi.html.twig');
    }
}
