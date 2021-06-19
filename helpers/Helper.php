<?php

if (!function_exists('dd')) {
    function dd($var)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        exit(0);
    }
}


if (!function_exists('loadView')) {
    function loadView($file, $params = [])
    {
        extract($params, EXTR_PREFIX_SAME, '');
        include 'resources/views/' . $file . '.php';
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
