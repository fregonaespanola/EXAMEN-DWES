<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dd8e45c3921ac04bc38451f1f727858
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dd8e45c3921ac04bc38451f1f727858::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dd8e45c3921ac04bc38451f1f727858::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dd8e45c3921ac04bc38451f1f727858::$classMap;

        }, null, ClassLoader::class);
    }
}
