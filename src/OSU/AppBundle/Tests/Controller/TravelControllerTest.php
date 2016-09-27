<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TravelControllerTest extends WebTestCase
{
    public function testTravel()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/travel');
    }

}
