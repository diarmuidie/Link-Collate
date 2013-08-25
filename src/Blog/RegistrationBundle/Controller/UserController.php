<?php

namespace Blog\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Blog\RegistrationBundle\Form\Type\RegistrationType;
use Blog\RegistrationBundle\Form\Model\Registration;

class UserController extends Controller
{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
                'action' => $this->generateUrl('account_create'),
            ));

        return $this->render(
            'BlogRegistrationBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            $em->persist($registration->getUser());
            $em->flush();

            return $this->redirect($this->generateUrl('account_get'));
    }

        return $this->render(
            'BlogRegistrationBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function getAction($id = null)
    {
        if(is_null($id)){
            $users = $this->getDoctrine()
                ->getRepository('BlogRegistrationBundle:User')
                ->findall();
            return $this->render('BlogRegistrationBundle:Account:index.html.twig', array('users' => $users, 'url' => $this->generateUrl('account_get')));
        }else{
            $user = $this->getDoctrine()
                ->getRepository('BlogRegistrationBundle:User')
                ->find($id);
            return $this->render('BlogRegistrationBundle:Account:password.html.twig', array('userPassword' => $user->plainpassword, 'url' => $this->generateUrl('account_get')));
        }
    }

}
