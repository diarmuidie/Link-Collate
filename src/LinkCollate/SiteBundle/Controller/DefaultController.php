<?php

namespace LinkCollate\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LinkCollateSiteBundle:Default:index.html.twig');
    }
}
