<?php 

namespace App\Helpers;

class Request
{
    public static function isPost() : bool
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public static function isGet() : bool
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    public static function all()
    {
        return $_REQUEST;
    }

    public static function has($key)
    {
        return isset($_REQUEST[$key]); 
    }

    public static function get($key)
    {
        if(self::has($key)) return $_REQUEST[$key];
    }
}