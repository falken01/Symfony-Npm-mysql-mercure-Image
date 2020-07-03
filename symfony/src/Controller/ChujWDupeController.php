<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChujWDupeController extends AbstractController
{
    /**
     * @Route("/chuj/w/dupe", name="chuj_w_dupe")
     */
    public function index()
    {
        return $this->render('chuj_w_dupe/index.html.twig', [
            'controller_name' => 'ChujWDupeController',
        ]);
    }
}
