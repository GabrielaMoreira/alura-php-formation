<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2967769badf71dec841776af00baa1e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\Infrastructure\\Persistence\\' => 37,
            'Alura\\Pdo\\Domain\\Model\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\Infrastructure\\Persistence\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Infrastructure/Persistence',
        ),
        'Alura\\Pdo\\Domain\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Domain/Model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2967769badf71dec841776af00baa1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2967769badf71dec841776af00baa1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2967769badf71dec841776af00baa1e::$classMap;

        }, null, ClassLoader::class);
    }
}