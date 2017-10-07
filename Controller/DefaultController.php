<?php

namespace Italia\SpidBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ItaliaSpidBundle:Default:index.html.twig');
    }
}
