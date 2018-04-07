<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fd07930c4a34aebdd97a3e3429588b3
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PEAR' => 
            array (
                0 => __DIR__ . '/..' . '/pear/pear_exception',
            ),
        ),
        'H' => 
        array (
            'HTTP_Request2' => 
            array (
                0 => __DIR__ . '/..' . '/pear/http_request2',
            ),
        ),
    );

    public static $classMap = array (
        'Net_URL2' => __DIR__ . '/..' . '/pear/net_url2/Net/URL2.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5fd07930c4a34aebdd97a3e3429588b3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5fd07930c4a34aebdd97a3e3429588b3::$classMap;

        }, null, ClassLoader::class);
    }
}
