<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends Controller {


    /**
     * @Route("/", name="homepage")
     */
    public function home() 
    {
        return $this->render('home.html.twig');
    }

}