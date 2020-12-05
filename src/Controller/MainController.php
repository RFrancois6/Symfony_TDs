<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("", name="main_", methods={"GET"})
 */
class MainController extends AbstractController{

    /*
    * @Route ("/", name="homepage")
    */
    public function homepage() : Response
    {
        return $this->render('main/homepage.html.twig');
    }

    /**
     * @Route("/presentation",name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render('main/presentation.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact() : Response
    {
        return $this->render('main/contact.html.twig');
    }
}