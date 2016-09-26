<?php

namespace OSU\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class RepresentativesController extends AbstractController
{
    public function representativesAction(Request $request)
    {
        return $this->render('OSUAppBundle:Representatives:representatives.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'representatives'
        )));
    }

}
