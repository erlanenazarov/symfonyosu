<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CoursesControllerTest extends WebTestCase
{
    public function testCourses()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/courses');
    }

}
