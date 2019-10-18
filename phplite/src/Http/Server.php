<?php

namespace Phplite\Http;
class Server
{
    /**
     * Server constructor.
     */
    private function __construct()
    {
    }

    /**
     * Check that server key exists
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        return isset($_SERVER[$key]);
    }

    /**
     * Get the value from server variables by the given key
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {
        return static::has($key) ? $_SERVER[$key] : null;
    }

    /**
     * Get path info for path
     * @param $path
     * @return array
     */
    public static function pathInfo($path)
    {
        return pathinfo($path);
    }

    /**
     * Get all server data
     */
    public static function all()
    {
        return $_SERVER;
    }
}