<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HistoryControllerTest extends WebTestCase
{
    public function testHistory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/osh-state-university/history');
    }

}
