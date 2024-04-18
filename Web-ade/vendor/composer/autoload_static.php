<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bf56cae8e9f5137afb6acd3f79bdd6f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Complex\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Complex\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/complex/classes/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bf56cae8e9f5137afb6acd3f79bdd6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bf56cae8e9f5137afb6acd3f79bdd6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bf56cae8e9f5137afb6acd3f79bdd6f::$classMap;

        }, null, ClassLoader::class);
    }
}