<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function makeMeHappy()
    {
        $number = rand(0, 100);

        return $this->render('base.html.twig', [
            "number" => $number
            ]);
       
    }
}