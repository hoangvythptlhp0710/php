<?php 
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController {
    public function number(): Response {
        $number = random_int(0, 10000);
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
        // return $this->render('test.html.twig',['number'=>$number]);
    }
}
?>