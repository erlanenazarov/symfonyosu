<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class RelationshipController extends AbstractController
{
    public function relationshipAction(Request $request)
    {
        return $this->render('OSUAppBundle:Relationship:relationship.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'relationship'
        )));
    }

}
