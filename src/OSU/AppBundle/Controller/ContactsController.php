<?php

namespace OSU\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class ContactsController extends AbstractController
{
    public function contactAction(Request $request)
    {
        return $this->render('OSUAppBundle:Contacts:contact.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'contact'
        )));
    }

}
