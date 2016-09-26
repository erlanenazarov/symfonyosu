<?php

namespace OSU\AppBundle\Controller;



use Symfony\Component\HttpFoundation\Request;

class CoursesController extends AbstractController
{
    public function coursesAction(Request $request)
    {
        return $this->render('OSUAppBundle:Courses:courses.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'courses'
        )));
    }

}
