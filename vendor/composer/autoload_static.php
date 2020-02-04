<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ad3d590dff2b747eea712546ddd336c
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JRN\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JRN\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ad3d590dff2b747eea712546ddd336c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ad3d590dff2b747eea712546ddd336c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}