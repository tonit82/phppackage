<?php

namespace ToniT82\PhpPackage\Tests;

use PHPUnit\Framework\TestCase;
use ToniT82\PhpPackage\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function returns_a_random_joke () 
    {
        $mock = new MockHandler([

            new Response(200, [], '{ "type": "success", "value": { "id": 34, "joke": "The opening scene of the movie &quot;Saving Private Ryan&quot; is loosely based on games of dodgeball Chuck Norris played in second grade.", "categories": [] } }')

        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('The opening scene of the movie &quot;Saving Private Ryan&quot; is loosely based on games of dodgeball Chuck Norris played in second grade.', $joke);
    }

}
