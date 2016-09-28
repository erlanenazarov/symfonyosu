<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class StudentsController extends AbstractController
{
    public function studentsLiveAction(Request $request)
    {
        return $this->render('OSUAppBundle:Students:students_live.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'students'
        )));
    }

}
