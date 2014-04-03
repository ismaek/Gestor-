<?php

namespace Padel\AmigoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PadelAmigoBundle:Default:index.html.twig', array('name' => $name));
    }
}
