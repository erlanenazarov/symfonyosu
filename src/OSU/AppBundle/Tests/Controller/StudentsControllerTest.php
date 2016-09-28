<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudentsControllerTest extends WebTestCase
{
    public function testStudentslive()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/students-live');
    }

}
