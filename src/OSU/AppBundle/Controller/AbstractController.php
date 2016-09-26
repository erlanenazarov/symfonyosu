<?php
/**
 * Created by PhpStorm.
 * User: erlan
 * Date: 9/26/16
 * Time: 3:45 PM
 */

namespace OSU\AppBundle\Controller;


use OSU\EntityBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AbstractController extends Controller {

    protected function buildContactForm() {
        $form = $this->createFormBuilder()
            ->add('name', 'text', array(
                'attr' => array(
                    'data-fill' => 'false',
                    'class' => 'osh-form-input'
                ),
                'required' => true
            ))
            ->add('email', 'email', array(
                'attr' => array(
                    'data-fill' => 'false',
                    'class' => 'osh-form-input'
                ),
                'required' => true
            ))
            ->add('phone', 'text', array(
                'attr' => array(
                    'data-fill' => 'false',
                    'class' => 'osh-form-input'
                )
            ))->getForm();
        return $form;
    }

    protected function generateViewParams(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('OSUEntityBundle:Post')->findBy(array(), array(), 2);

        return array(
            'contact_form' => $this->buildContactForm()->createView(),
            'posts' => $posts
        );
    }
}