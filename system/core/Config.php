<?php


namespace System\Core;


class Config
{
    public $config = array();

    public function load($filename)
    {
        $path = CONFIG_PATH . $filename . '.php';

        if (is_file($path)) {
            $this->config = include($path);
        }

        return $this;
    }

    /**
     * Fetch a config file item
     *
     * @param string $item Config item name
     * @param string $index Index name
     * @return    string|null    The configuration item or NULL if the item doesn't exist
     */
    public function item($item, $index = '')
    {
        if ($index == '') {
            return isset($this->config[$item]) ? $this->config[$item] : NULL;
        }

        return isset($this->config[$index], $this->config[$index][$item]) ? $this->config[$index][$item] : NULL;
    }
}