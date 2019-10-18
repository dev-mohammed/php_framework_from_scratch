<?php

namespace Phplite\Bootstrap;

use Phplite\Exceptions\Whoops;

class App
{

    /**
     * App constructor.
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Run the application
     * @return void
     */
    public static function run()
    {
        Whoops::handle();
        throw new \Exception('there is an error from app run');
    }
}
