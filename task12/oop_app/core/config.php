<?php 

if(session_status() == PHP_SESSION_NONE) session_start();

$rootDirName = basename(dirname(__DIR__));
$urlParts = explode('/', $_SERVER['REQUEST_URI']);

$projectpath = '';
foreach ($urlParts as $part){
    $projectpath .= $part . '/';
    if($part == $rootDirName) break;
}

// use with href and src
define('APP_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $projectpath );

// wue with require and include
define('APP_PATH',$_SERVER['DOCUMENT_ROOT'] . $projectpath);



define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','oop_app');