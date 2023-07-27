<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'my first controller : HomeController',
        ]);
    }

    #[Route('/calc/{x}/{y}', name: 'app_calc')]
    public function calc($x=1,$y=2): Response
    {
        $res=$x*$y;
        return $this->render('home/calc.html.twig',[
            'res'=>$res,
            'x'=>$x,
            'y'=>$y,
        ]);
    }
}
