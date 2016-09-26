<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdmissionControllerTest extends WebTestCase
{
    public function testAdmission()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admission');
    }

}
