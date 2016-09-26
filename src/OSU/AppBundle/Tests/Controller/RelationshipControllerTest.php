<?php

namespace OSU\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RelationshipControllerTest extends WebTestCase
{
    public function testRelationship()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/relationship');
    }

}
