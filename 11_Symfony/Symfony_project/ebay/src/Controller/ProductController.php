<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name = "product")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $products = $repo->findAll();
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products
        ]);
    }


    /**
     * Show all products
     * Rajouter une regex (requirements= {...}) pour indiquer à la route qu'on attend un integer et qu'il n'y est pas de conflit entre les routes du même nom
     * @Route("/product/{id}", name = "product_show", requirements = {"id"="\d+"})
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find($id);
        return $this->render('product/show.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * Ajout d'un produit à vendre
     * @Route("/product/new", name = "product_new")
     * @Route("/product/{id}/edit", name = "product_edit")
     */

    public function ProductForm(Product $product = null, Request $request, ObjectManager $manager)
    {
            if (!$product)
            {
                $product = new Product();
            }
            
            // $form = $this->createFormBuilder($product) // le form builder et lier à l'entity Product donc le nom des add doit correspondre aux champs de l'entity
            //              ->add('product_name')
            //              ->add('product_desc')
            //              ->add('product_price')
            //              ->add('product_image')
            //              ->getForm();
            $form = $this->createForm(ProductType::class);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                if (!$product->getId())
                {
                    $product->setCreatedAt(new \Datetime());
                }

                $manager->persist($product);
                $manager->flush();

                return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
            }

        return $this->render('/product/create.html.twig', [
            'formProduct' => $form->createView(),
            'editButton' => $product->getId() !== null
        ]);
    }
    // public function create(Request $request, ObjectManager $manager)
    // {
    //     if ($request->request->count() > 0)
    //     {
    //         $product = new Product();
    //         $product->setProductName($request->request->get('product name'))
    //                 ->setProductDesc($request->request->get('product description'))
    //                 ->setProductPrice($request->request->get('product price'))
    //                 ->setProductImage($request->request->get('product image'))
    //                 ->setCreatedAt(new \DateTime());

    //         $manager->persist($product);
    //         $manager->flush();

    //         return $this->redirectToRoute('product/show', ['id' => $product->getId()]);

    //     }
    //     return $this->render('/product/create.html.twig');
    // }
}
