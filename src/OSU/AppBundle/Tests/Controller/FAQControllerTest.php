<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FAQControllerTest extends WebTestCase
{
    public function testQuestions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/FAQ');
    }

}
