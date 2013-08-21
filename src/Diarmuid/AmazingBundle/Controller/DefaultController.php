<?php

namespace Diarmuid\AmazingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $links = $this->getDoctrine()
            ->getRepository('DiarmuidAmazingBundle:Link')
            ->findAll();

        if (!$links) {
            throw $this->createNotFoundException(
                'No Links Found'
            );
        }

        return $this->render('DiarmuidAmazingBundle:Default:index.html.twig', array('links' => $links));
    }

    public function showAction($id) {

        $link = $this->getDoctrine()
            ->getRepository('DiarmuidAmazingBundle:Link')
            ->findOneById($id);

        if (!$link) {
            throw $this->createNotFoundException(
                $id . ' Not Found'
            );
        }

        return $this->render('DiarmuidAmazingBundle:Default:show.html.twig', array("link" => $link));
    }

    public function addAction() {
        return $this->render('DiarmuidAmazingBundle:Default:index.html.twig');
    }

    public function deleteAction() {
        return $this->render('DiarmuidAmazingBundle:Default:index.html.twig');
    }

    public function updateAction() {
        return $this->render('DiarmuidAmazingBundle:Default:index.html.twig');
    }
}
