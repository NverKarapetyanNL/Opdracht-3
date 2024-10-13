<?php
spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/../';

    $file = $baseDir . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Klasse $className niet gevonden in $file");
    }
});


