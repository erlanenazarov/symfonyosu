<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class HistoryController extends AbstractController
{
    public function historyAction(Request $request)
    {
        return $this->render('OSUAppBundle:History:history.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'history'
        )));
    }

}
