<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController {
    /**
     * @Route("/test", name="test1", methods={"POST", "GET"}, priority = 2)
     */

    public function test(): Response{
        // return new Response(
        //     '<html><body>This is the test page.</body></html>'
        // );
        $number = 1;
        return $this->render("test.html.twig", ['number'=>$number]);
    }


    /**
     * @Route("/test/{id<\d+>}", name="test2")
     */


}