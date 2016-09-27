<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class FAQController extends AbstractController
{
    public function questionsAction(Request $request)
    {
        return $this->render('OSUAppBundle:FAQ:questions.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'questions'
        )));
    }

}
