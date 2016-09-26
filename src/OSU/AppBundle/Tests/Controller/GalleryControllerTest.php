<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GalleryControllerTest extends WebTestCase
{
    public function testGalleries()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/galleries');
    }

    public function testGallery()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gallery/{id}');
    }

}
