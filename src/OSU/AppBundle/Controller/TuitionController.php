<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class TuitionController extends AbstractController
{
    public function tuitionAction(Request $request)
    {
        return $this->render('OSUAppBundle:Tuition:tuition.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'tuition'
        )));
    }

}
