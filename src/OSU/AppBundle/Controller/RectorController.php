<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class RectorController extends AbstractController
{
    public function rectorAction(Request $request)
    {
        return $this->render('OSUAppBundle:Rector:rector.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'rector'
        )));
    }

}
