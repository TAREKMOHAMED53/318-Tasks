<?php 

function url($uri)  : string
{
    return $uri == '/' ? APP_URL : APP_URL . $uri;
}

function path($path)  : string
{
    return $path == '/' ? APP_PATH : APP_PATH . $path;
}

function redirect(string $path)
{
    header("Location: ". url($path));
    exit;
}

function dd($data)
{
    echo "<pre>";
        print_r($data);
    echo "</pre>";
    exit;
}