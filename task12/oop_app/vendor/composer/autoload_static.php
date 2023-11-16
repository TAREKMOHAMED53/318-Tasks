<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dd0a22a94037aa4cf61ff9cbd308922
{
    public static $files = array (
        '36a06814c089dec935c6a8e73edb5462' => __DIR__ . '/../..' . '/core/config.php',
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dd0a22a94037aa4cf61ff9cbd308922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dd0a22a94037aa4cf61ff9cbd308922::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dd0a22a94037aa4cf61ff9cbd308922::$classMap;

        }, null, ClassLoader::class);
    }
}
