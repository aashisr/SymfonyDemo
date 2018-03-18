<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function createAction()
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(20);
        $product->setDescription('Ergonomic a nd stylish!');

        $em = $this->getDoctrine()->getManager();

        //Tells Doctrine you want to save the product, no queries yet
        $em->persist($product);

        //executes INSERT query
        $em->flush();

        return new Response('Saved new product with id ' .$product->getId());
    }
}
