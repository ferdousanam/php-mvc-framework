<?php


namespace System\Core;


class Load
{
    const FILE_EXTENSION = '.php';

    public function view($view, $data = [])
    {
        extract($data, EXTR_OVERWRITE);
        include 'resources/views/' . $view . self::FILE_EXTENSION;
    }
}
