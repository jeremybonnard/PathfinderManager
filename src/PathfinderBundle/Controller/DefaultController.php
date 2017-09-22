<?php

namespace PathfinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PathfinderBundle:Default:index.html.twig');
    }
}
