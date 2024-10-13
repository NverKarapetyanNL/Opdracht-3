<?php

namespace core;

class Controller
{
    public function view($view, $data = []): void
    {
        $file = __DIR__ . '/../views/' . $view . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            die("View $view niet gevonden in $file");
        }
    }
}
