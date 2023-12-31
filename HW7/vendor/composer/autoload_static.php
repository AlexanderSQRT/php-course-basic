<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit174fd7459bcccaf29d459a340b1e1f21
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'src\\controllers\\About' => __DIR__ . '/../..' . '/src/controllers/About.php',
        'src\\controllers\\Error' => __DIR__ . '/../..' . '/src/controllers/Error.php',
        'src\\controllers\\Gallery' => __DIR__ . '/../..' . '/src/controllers/Gallery.php',
        'src\\controllers\\Home' => __DIR__ . '/../..' . '/src/controllers/Home.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit174fd7459bcccaf29d459a340b1e1f21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit174fd7459bcccaf29d459a340b1e1f21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit174fd7459bcccaf29d459a340b1e1f21::$classMap;

        }, null, ClassLoader::class);
    }
}
