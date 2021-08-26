<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }



    #[Route("random/{max}", name:"randomw_number")]
    public function number($max){
        $number = random_int(0, $max);
        return $this->render('test/random.html.twig',[
            'randomNumber'=> $number
        ]);
    }

}
