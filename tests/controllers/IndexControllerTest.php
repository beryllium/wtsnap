<?php

namespace Beryllium\Snap;

use Silex\WebTestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

class IndexControllerTest extends WebTestCase
{
    public function createApplication()
    {
        // set the app environment to "test" (processed in the bootstrap.php file)
        $app_env   = 'test';
        $this->app = require __DIR__ . '/../../web/index.php';

        // enable debug mode and in-memory storage for sessions
        $this->app['debug']   = true;
        $this->app['session'] = new Session(new MockArraySessionStorage());

        return $this->app;
    }

    public function testIndex()
    {
        $client   = $this->createClient();
        $crawler  = $client->request('GET', '/');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(false !== strpos($response->getContent(), 'Hello, cruel world.'), 'Welcome message not found');
    }
} 