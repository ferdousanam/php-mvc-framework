<?php
pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_BASENAME) != basename(__FILE__) or exit('No direct script access allowed');


spl_autoload_register(function ($className) {
    $file = str_replace('\\', '/', strtolower($className)) . '.php';
    if (file_exists($file)) {
        include str_replace('\\', '/', strtolower($className)) . '.php';
    }
});
