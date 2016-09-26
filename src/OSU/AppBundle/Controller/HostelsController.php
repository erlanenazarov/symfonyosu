<?php

namespace OSU\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class HostelsController extends AbstractController
{
    public function hostelsAction(Request $request)
    {
        return $this->render('OSUAppBundle:Hostels:hostels.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'hostels'
        )));
    }

}
