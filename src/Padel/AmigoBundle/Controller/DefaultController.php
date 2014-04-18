<?php

namespace Padel\AmigoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PadelAmigoBundle:Default:index.html.twig');
    }
    
    public function userAction(){
        return $this->render('PadelAmigoBundle:User:index.html.twig');
    }
    
    public function clubAction(){
        return $this->render('PadelAmigoBundle:Club:index.html.twig');
    }
}
