<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    public function indexAction(Request $request)
    {
        return $this->render('OSUAppBundle:Index:index.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'home'
        )));
    }

}
