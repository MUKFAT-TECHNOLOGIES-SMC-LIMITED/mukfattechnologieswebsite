<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6ef8ac89e9f9259ef8283c7e4ca53bd7
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit6ef8ac89e9f9259ef8283c7e4ca53bd7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6ef8ac89e9f9259ef8283c7e4ca53bd7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6ef8ac89e9f9259ef8283c7e4ca53bd7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
