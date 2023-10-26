<?php 

class Functions
{
    function checkRequestMethod($method){
        if($_SERVER['REQUEST_METHOD'] == $method){
            return true;
        }
        return false;
    }
    function redirect($location)
    {
        header("Location: $location");
        die;
    }
    function dd($data)
    {
        echo "<pre>";
            print_r($data);
        echo "</pre>";
        die;
    }
    function asset($path) {
        $path = 'http://localhost/course/'.$path;
        $_SERVER['HTTP_REFERER'] = $path;
        echo $_SERVER['HTTP_REFERER'];
    }
}