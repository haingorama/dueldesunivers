<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91fb6346ae35d1f4f0ffcf17350db4a6
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'ludk\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ludk\\' => 
        array (
            0 => __DIR__ . '/..' . '/ludonkey/tinymvc',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static $classMap = array (
        'Entity\\Movie' => __DIR__ . '/../..' . '/src/Entity/Movie.php',
        'Entity\\User' => __DIR__ . '/../..' . '/src/Entity/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91fb6346ae35d1f4f0ffcf17350db4a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91fb6346ae35d1f4f0ffcf17350db4a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91fb6346ae35d1f4f0ffcf17350db4a6::$classMap;

        }, null, ClassLoader::class);
    }
}