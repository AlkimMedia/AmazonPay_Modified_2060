<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0d5d949ca6f3d5f0cccc202bdf01223
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'A' => 
        array (
            'Aws\\Sns\\' => 8,
            'Amazon\\Pay\\API\\' => 15,
            'AmazonPayApiSdkExtension\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Aws\\Sns\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-php-sns-message-validator/src',
        ),
        'Amazon\\Pay\\API\\' => 
        array (
            0 => __DIR__ . '/..' . '/amzn/amazon-pay-api-sdk-php/Amazon/Pay/API',
        ),
        'AmazonPayApiSdkExtension\\' => 
        array (
            0 => __DIR__ . '/..' . '/mkreusch/amazon-pay-api-sdk-php-extension',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0d5d949ca6f3d5f0cccc202bdf01223::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0d5d949ca6f3d5f0cccc202bdf01223::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0d5d949ca6f3d5f0cccc202bdf01223::$classMap;

        }, null, ClassLoader::class);
    }
}
