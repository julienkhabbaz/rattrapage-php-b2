<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $this->loadProduits($manager);
        $manager->flush();
    }

    public function loadProduits(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        $faker->addProvider(new \Liior\Faker\Prices($faker));

        for($i = 0; $i < 100; $i++)
        {
        	$poduit = new Produit();
        	$poduit 
        		->setName($faker->words(3,TRUE))
        		->setDescription($faker->sentences(3,TRUE))
                ->setPromo($faker->boolean)
                ->setPrix($faker->price(20,400))
                ->setCreated(new \DateTime('now'))
                ->setPicture($faker->imageUrl(400, 400));
            
                ;
            
        	$manager->persist($poduit);
        }

        $manager->flush();
    }
}
