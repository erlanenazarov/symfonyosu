<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class GalleryController extends AbstractController
{
    public function galleriesAction(Request $request)
    {
        $galleries = $this->getDoctrine()->getManager()->getRepository('ApplicationSonataMediaBundle:Gallery')->findAll();

        return $this->render('OSUAppBundle:Gallery:galleries.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'gallery',
            'galleries' => $galleries
        )));
    }

    public function galleryAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $gallery = $em->getRepository('ApplicationSonataMediaBundle:Gallery')->find($id);

        return $this->render('OSUAppBundle:Gallery:gallery.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'gallery',
            'gallery' => $gallery
        )));
    }

}
