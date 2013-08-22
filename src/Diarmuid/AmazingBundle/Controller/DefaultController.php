<?php

namespace Diarmuid\AmazingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Diarmuid\AmazingBundle\Entity\Link;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $links = $this->getDoctrine()
            ->getRepository('DiarmuidAmazingBundle:Link')
            ->findAll();

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

    public function addAction(Request $request) {

        $link = new Link();

        $form = $this->createFormBuilder($link)
            ->add('URL', 'url')
            ->add('Title', 'textarea')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database

            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            return $this->redirect($this->generateUrl(
                'Link_show',
                array('id' => $link->getId()))
            );
        }

        return $this->render('DiarmuidAmazingBundle:Default:add.html.twig', array('form' => $form->createView()) );
    }

    public function deleteAction($id) {

        $link = $this->getDoctrine()
            ->getRepository('DiarmuidAmazingBundle:Link')
            ->findOneById($id);

        if (!$link) {
            throw $this->createNotFoundException(
                $id . ' Not Found'
            );
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($link);
        $em->flush();

        return $this->redirect($this->generateUrl('Link'));

    }

    public function updateAction(Request $request, $id) {

        $link = $this->getDoctrine()
            ->getRepository('DiarmuidAmazingBundle:Link')
            ->findOneById($id);

        if (!$link) {
            throw $this->createNotFoundException(
                $id . ' Not Found'
            );
        }

        $form = $this->createFormBuilder($link)
            ->add('URL', 'url')
            ->add('Title', 'textarea')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database

            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush();

            return $this->redirect($this->generateUrl(
                    'Link_show',
                    array('id' => $link->getId()))
            );
        }

        return $this->render('DiarmuidAmazingBundle:Default:add.html.twig', array('form' => $form->createView()) );
    }
}
