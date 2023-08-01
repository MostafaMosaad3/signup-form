<?php

namespace Core;

class App
{
    public static $history = [];

    public static function bind($key , $value)
    {

        static::$history[$key] = $value;


    }
    public static function get($key)
    {
        if (! array_key_exists($key , static::$history))
        {
            throw new \Exception("Not Found");
        }
        else
        {
            return static::$history[$key];
        }
    }
}