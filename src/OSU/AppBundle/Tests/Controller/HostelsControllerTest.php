<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HostelsControllerTest extends WebTestCase
{
    public function testHostels()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hostels');
    }

}
