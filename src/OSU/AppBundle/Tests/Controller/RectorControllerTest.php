<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RectorControllerTest extends WebTestCase
{
    public function testRector()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/message-from-rector');
    }

}
