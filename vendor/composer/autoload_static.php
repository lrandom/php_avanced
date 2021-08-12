<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84f3f9234947e712b8f7a9fd7b79cbd0
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lrandom\\Cp17Avanced\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lrandom\\Cp17Avanced\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84f3f9234947e712b8f7a9fd7b79cbd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84f3f9234947e712b8f7a9fd7b79cbd0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84f3f9234947e712b8f7a9fd7b79cbd0::$classMap;

        }, null, ClassLoader::class);
    }
}