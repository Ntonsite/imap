<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfca23b3c698164293ac3c400c5962622
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpImap\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpImap\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-imap/php-imap/src/PhpImap',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfca23b3c698164293ac3c400c5962622::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfca23b3c698164293ac3c400c5962622::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
