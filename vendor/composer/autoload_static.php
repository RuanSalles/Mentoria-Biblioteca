<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdfdec3e13853e010f82a58edf001a58
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdfdec3e13853e010f82a58edf001a58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdfdec3e13853e010f82a58edf001a58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdfdec3e13853e010f82a58edf001a58::$classMap;

        }, null, ClassLoader::class);
    }
}