<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class AdmissionController extends AbstractController
{
    public function admissionAction(Request $request)
    {
        return $this->render('OSUAppBundle:Admission:admission.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'admissions'
        )));
    }

}
