<?php

// autoload_real.php @generated by Composer

use Composer\Autoload\ClassLoader;

class ComposerAutoloaderInitee05ea1e6dfde4ee0aa4c2b3bf3c6b40
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitee05ea1e6dfde4ee0aa4c2b3bf3c6b40', 'loadClassLoader'), true, true);
        self::$loader = $loader = new ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitee05ea1e6dfde4ee0aa4c2b3bf3c6b40', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        return $loader;
    }
}
