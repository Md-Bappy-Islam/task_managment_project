<?php
spl_autoload_register(function ($class) {
    $rootdiractory = dirname(__DIR__) . '/';
    $file = $rootdiractory . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
