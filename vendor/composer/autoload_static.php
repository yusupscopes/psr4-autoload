<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit202b92911eabd4cccecdc6ed5833be7d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit202b92911eabd4cccecdc6ed5833be7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit202b92911eabd4cccecdc6ed5833be7d::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit202b92911eabd4cccecdc6ed5833be7d::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
