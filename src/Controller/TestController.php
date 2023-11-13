<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        echo "test2";
        echo "test2indev"
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
