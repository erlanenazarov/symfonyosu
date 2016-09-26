<?php

namespace OSU\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class DeanController extends AbstractController
{
    public function deanAction(Request $request)
    {
        return $this->render('OSUAppBundle:Dean:dean.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'dean'
        )));
    }

}
