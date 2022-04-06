<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    #[Route('/', 'home.index', methods: ['GET'])]
    public function index() 
    {
       //return new Response('<html><body>Hello world</body></html>');    
        return $this->render('home.index.twig');
    }

}