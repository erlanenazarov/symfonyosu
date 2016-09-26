<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class GalleryController extends AbstractController
{
    public function galleriesAction(Request $request)
    {
        return $this->render('OSUAppBundle:Gallery:galleries.html.twig', array(
            // ...
        ));
    }

    public function galleryAction(Request $request, $id)
    {
        return $this->render('OSUAppBundle:Gallery:gallery.html.twig', array(
            // ...
        ));
    }

}
