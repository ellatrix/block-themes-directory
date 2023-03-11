<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8878203cca9d41cf8cee801bc81233bb
{
    public static $files = array (
        'f5fadbf6aa1b82ec08b99e70b3c332cd' => __DIR__ . '/../..' . '/src/functions-helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'X3P0\\Reflections\\' => 17,
        ),
        'H' => 
        array (
            'Hybrid\\Mix\\' => 11,
            'Hybrid\\Contracts\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'X3P0\\Reflections\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Hybrid\\Mix\\' => 
        array (
            0 => __DIR__ . '/..' . '/themehybrid/hybrid-mix/src',
        ),
        'Hybrid\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/themehybrid/hybrid-contracts/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Hybrid\\Contracts\\Bootable' => __DIR__ . '/..' . '/themehybrid/hybrid-contracts/src/Bootable.php',
        'Hybrid\\Contracts\\Displayable' => __DIR__ . '/..' . '/themehybrid/hybrid-contracts/src/Displayable.php',
        'Hybrid\\Contracts\\Renderable' => __DIR__ . '/..' . '/themehybrid/hybrid-contracts/src/Renderable.php',
        'Hybrid\\Mix\\Mix' => __DIR__ . '/..' . '/themehybrid/hybrid-mix/src/Mix.php',
        'X3P0\\Reflections\\Assets' => __DIR__ . '/../..' . '/src/Assets.php',
        'X3P0\\Reflections\\BlockPatterns' => __DIR__ . '/../..' . '/src/BlockPatterns.php',
        'X3P0\\Reflections\\BlockStyles' => __DIR__ . '/../..' . '/src/BlockStyles.php',
        'X3P0\\Reflections\\BlockTemplates' => __DIR__ . '/../..' . '/src/BlockTemplates.php',
        'X3P0\\Reflections\\ImageSizes' => __DIR__ . '/../..' . '/src/ImageSizes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8878203cca9d41cf8cee801bc81233bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8878203cca9d41cf8cee801bc81233bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8878203cca9d41cf8cee801bc81233bb::$classMap;

        }, null, ClassLoader::class);
    }
}
