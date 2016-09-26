<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DeanControllerTest extends WebTestCase
{
    public function testDean()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dean');
    }

}
