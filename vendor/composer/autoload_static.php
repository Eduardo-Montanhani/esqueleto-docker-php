<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca8400a58f25f2f7a587fb3a1b5aab91
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unialfa\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unialfa\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca8400a58f25f2f7a587fb3a1b5aab91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca8400a58f25f2f7a587fb3a1b5aab91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca8400a58f25f2f7a587fb3a1b5aab91::$classMap;

        }, null, ClassLoader::class);
    }
}
