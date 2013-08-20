<?php

namespace Diarmuid\AmazingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DiarmuidAmazingBundle:Default:index.html.twig', array('name' => $name));
    }
}
