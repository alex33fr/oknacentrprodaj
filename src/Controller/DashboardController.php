<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    /**
     * @Route("/product/new", name="new_product")
     * @Route("/product/{id}/edit", name="edit_product")
     */
    public function form(Product $product = null, Request $request, ObjectManager $manager){

        if(!$product) {
            $product = new Product();
        }

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            if(!$product->getId()){
                $product->setProductCreatedAt(new \DateTime());
            }

            $manager->persist($product);
            $manager->flush();

            return $this->redirectToRoute('show_product', ['id' => $product->getId()]);
        }

        return $this->render('dashboard/create.html.twig', [
            'formProduct' => $form->createView(),
            'editMode' => $product->getId() !== null
        ]);
    }
}
