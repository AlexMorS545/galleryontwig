<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f8a5c6dcd2864214fd9594ce666efac
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f8a5c6dcd2864214fd9594ce666efac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f8a5c6dcd2864214fd9594ce666efac::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7f8a5c6dcd2864214fd9594ce666efac::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7f8a5c6dcd2864214fd9594ce666efac::$classMap;

        }, null, ClassLoader::class);
    }
}
