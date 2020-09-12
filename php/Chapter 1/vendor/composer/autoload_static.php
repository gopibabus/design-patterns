<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec337a6327362fcbae6e11c87c9426b1
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IcyApril\\ChapterOne\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IcyApril\\ChapterOne\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec337a6327362fcbae6e11c87c9426b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec337a6327362fcbae6e11c87c9426b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}