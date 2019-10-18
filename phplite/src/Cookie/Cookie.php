<?php

namespace Phplite\Cookie;
class Cookie
{
    /**
     * Session constructor.
     */
    private function __construct()
    {
    }

    /**
     * Set new Cookie
     * @param string $key
     * @param string $value
     * @return string $value
     */
    public static function set($key, $value)
    {
        $expired = time() + (1 * 365 * 24 * 60 * 60);
        setcookie($key, $value, $expired, '/', '', false, false);
        return $value;
    }

    /**
     * Check that cookie has the key
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return isset($_COOKIE[$key]);
    }

    /**
     * Get cookie by the given key
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        return static::has($key) ? $_COOKIE[$key] : null;
    }

    /**
     * Remove cookie by the given key
     * @param $key
     * @return void
     */
    public static function remove($key)
    {
        unset($_COOKIE[$key]);
        setcookie($key, null, -1, '/');
    }

    /**
     * Return all cookies
     * @return mixed
     */
    public static function all()
    {
        return $_COOKIE;
    }

    /**
     * Destroy All Cookies
     * @return void
     */
    public static function destroy()
    {
        foreach (static::all() as $key => $value) {
            static::remove($key);
        }
    }
}
