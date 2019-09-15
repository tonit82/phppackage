<?php

namespace ToniT82\PhpPackage\Tests;

use PHPUnit\Framework\TestCase;
use ToniT82\PhpPackage\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function returns_a_random_joke () 
    {
        $jokes = new JokeFactory([
            'This is awesome hahaha'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is awesome hahaha', $joke);
    }

    /** @test */
    public function return_predifined_jokes()
    {
        $chuckNorriJokes = [
            'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
        ];

        $jokes = new JokeFactory($chuckNorriJokes);

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorriJokes);
    }

}
