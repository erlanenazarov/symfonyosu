<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class TravelController extends AbstractController
{
    public function travelAction(Request $request)
    {
        return $this->render('OSUAppBundle:Travel:travel.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'travel'
        )));
    }

}
