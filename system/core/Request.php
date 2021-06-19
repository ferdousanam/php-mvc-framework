<?php


namespace System\Core;


class Request
{
    protected $inputs = array();

    public function __construct()
    {
        $this->_setInputs();
    }

    protected function _setInputs()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->inputs = $_GET;
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->inputs = $_POST;
        }
    }

    public function input($key)
    {
        return $this->inputs[$key] ?? NULL;
    }
}
