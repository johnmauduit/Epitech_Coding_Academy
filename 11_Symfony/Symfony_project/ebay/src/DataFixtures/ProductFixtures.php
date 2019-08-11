<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        //$user = new User();
        

        // Créer 5 user fake  (l = compteur de product fake)
        for ($l = 1; $l < 5; $l++)
        {
            $user = new User();

            $user->setFirstname($faker->firstNameFemale());
            $user->setLastname($faker->lastName());
            $user->setAddress($faker->address());
            $user->setUsername($faker->userName());
            $user->setEmail($faker->email());
            $user->setPlainPassword($faker->password());

            $manager->persist($user);
            

        }

        // Créer 5 category fake (i = compteur de category fake)
        for ($i = 1; $i < 5; $i++)
        {
            $category = new Category();

            $category->setCatName($faker->word());
            $category->setCatDesc($faker->paragraph());

            $manager->persist($category);


            // Créer entre 4 et 6 product fake (j = compteur de product fake)
            for ($j = 1; $j < mt_rand(4, 6); $j++)
            {
                $product = new Product();

                $product->setProductName($faker->sentence());
                $product->setProductDesc($faker->paragraph());
                $product->setProductPrice($faker->numberBetween($min = 10, $max = 1000));
                $product->setProductImage($faker->imageUrl($width = 640, $height = 480));
                $product->setCreatedAt($faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null));
                $product->setUpdatedAt($faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null));
                $product->setCategory($category);

                $manager->persist($product);


                // Créer entre 4 et 10 comment fake par product (k = compteur de product fake)
                for ($k = 1; $k < 3; $k++)
                {
                    $comment = new Comment();
                    //$user = new User();
        
                    $content = '<p>' . join($faker->paragraphs(2), '</p><p>') . '</p>';
        
                    $now = new \DateTime();
                    //$interval = $now->diff($comment->getCreatedAt());
                    // $days = $interval->days;
                    // $minimum = '-' . $days . 'days';
        
                    $comment->setAuthor($user);
                    $comment->setContent($content);
                    $comment->setProduct($product);
                    //$comment->setCreatedAt($faker->dateTimeBetween($now));
                    $comment->setCreatedAt($faker->dateTimeBetween('-3 monyhs'));
        
                    $manager->persist($comment);
                }

            }
        }

        $manager->flush();
    }
}
