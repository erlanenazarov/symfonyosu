<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TuitionControllerTest extends WebTestCase
{
    public function testTuition()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tuition');
    }

}
