<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RepresentativesControllerTest extends WebTestCase
{
    public function testRepresentatives()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/representatives');
    }

}
