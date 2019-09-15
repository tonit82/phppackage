<?php

namespace ToniT82\PhpPackage;

class JokeFactory 
{
    
    protected $jokes = [
        'There is no theory of evolution. Just a list of animals Chuck Norris allows to live.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
        'The leading causes of death in the United States are: 1. Heart Disease 2. Chuck Norris 3. Cancer.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }

    }

    public function getRandomJoke ()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

}


?>