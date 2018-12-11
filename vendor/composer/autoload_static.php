<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit008522ccd960fec0efd15ee52abe5d27
{
    public static $files = array (
        '9f394da3192a168c4633675768d80428' => __DIR__ . '/..' . '/nwidart/laravel-modules/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nwidart\\Modules\\' => 16,
        ),
        'M' => 
        array (
            'Modules\\Auth\\' => 13,
        ),
        'J' => 
        array (
            'Joshbrw\\LaravelModuleInstaller\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nwidart\\Modules\\' => 
        array (
            0 => __DIR__ . '/..' . '/nwidart/laravel-modules/src',
        ),
        'Modules\\Auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Joshbrw\\LaravelModuleInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/joshbrw/laravel-module-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit008522ccd960fec0efd15ee52abe5d27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit008522ccd960fec0efd15ee52abe5d27::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
