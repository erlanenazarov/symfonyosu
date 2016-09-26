<?php

namespace OSU\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class PostsController extends AbstractController
{
    public function postsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('OSUEntityBundle:Post')->findAll();

        return $this->render('OSUAppBundle:Posts:posts.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'home',
            'posts' => $posts
        )));
    }

    public function postAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('OSUEntityBundle:Post')->find($id);

        return $this->render('OSUAppBundle:Posts:post.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'home',
            'post' => $post
        )));
    }

}
