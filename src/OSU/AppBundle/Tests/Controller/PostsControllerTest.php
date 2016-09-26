<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostsControllerTest extends WebTestCase
{
    public function testPosts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/posts');
    }

    public function testPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post/{id}');
    }

}
