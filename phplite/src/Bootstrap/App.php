<?php

namespace Phplite\Bootstrap;

use Phplite\Cookie\Cookie;
use Phplite\Exceptions\Whoops;
use Phplite\Session\Session;

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
        // Register Whoops
        Whoops::handle();

        // Start Session
        Session::start();

        var_dump(Cookie::destroy());
    }
}
