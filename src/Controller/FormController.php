<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ProductType;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController {

    /**
     *  @Route("/form/test1")
     */

    public function test1(): Response {
        $product = new Product();
        $product -> setName('a');
        $product -> setAddress('Trieu Khuc');
        $product -> setPrice('14553');

        $form = $this->createForm(ProductType::class, $product);

        return $this->renderForm('test.html.twig', [
            'form' => $form, 'date' => 'test'
        ]);
    }
}

