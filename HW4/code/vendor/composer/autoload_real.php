<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb92f5a1d26c9e867870b268af89ca787
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb92f5a1d26c9e867870b268af89ca787', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb92f5a1d26c9e867870b268af89ca787', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb92f5a1d26c9e867870b268af89ca787::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
