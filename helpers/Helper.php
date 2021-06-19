<?php

if (!function_exists('dump')) {
    function dump(...$vars)
    {
        foreach ($vars as $var) {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
        }
    }
}

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $var) {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
        }

        exit(1);
    }
}


if (!function_exists('view')) {
    function view($view, $data = [])
    {
        (new \System\Core\Load())->view($view, $data);
    }
}

if (!function_exists('config')) {
    function config($key)
    {
        $filename = explode('.', $key)[0];
        $config = new \System\Core\Config();
        return $config->load($filename)->item(preg_replace('~' . $filename . '.~', '', $key, 1));
    }
}
