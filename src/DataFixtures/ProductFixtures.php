<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){

        $product = new Product();
        $product->setProductColor("Red")
                ->setProductName("Produit n°$i")
                ->setProductImage("http://placehold.it/350x150")
                ->setProductDescriptionOne("Description de prduit 1:")
                ->setProductDescriptionTwo("Description product 2")
                ->setProductCode("Dejefhe5125")
                ->setProductQuantity("5")
                ->setProductSwitchPrice(1)
                ->setProductLowPrice(500)
                ->setProductPrice(1000)
                ->setProductCoupon(50)
                ->setProductCreatedAt(new \DateTime());

            $manager->persist($product);
        }

        $manager->flush();
    }
}
