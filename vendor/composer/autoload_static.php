<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04d305193e7621e43672d1d846876402
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\TracksController' => __DIR__ . '/../..' . '/app/controllers/TracksController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Helper' => __DIR__ . '/../..' . '/core/Helper.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Track' => __DIR__ . '/../..' . '/app/models/Track.php',
        'ComposerAutoloaderInit04d305193e7621e43672d1d846876402' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit04d305193e7621e43672d1d846876402' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit04d305193e7621e43672d1d846876402::$classMap;

        }, null, ClassLoader::class);
    }
}