<?php

namespace Phplite\Bootstrap;

use Phplite\Cookie\Cookie;
use Phplite\Exceptions\Whoops;
use Phplite\Http\Server;
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

        var_dump(Server::pathInfo('http://localhost:8080/tuts/php_framework/public'));
    }
}
