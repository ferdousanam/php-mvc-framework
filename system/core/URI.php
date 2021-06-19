<?php


namespace System\Core;


class URI
{
    public $uri_string = '';

    private $uri_prefix = '';

    public $segments = array();

    public $uri_params = array();

    public $controller;

    public $method;

    public function __construct()
    {
        $this->controller = config('app.default_controller');

        $this->method = 'index';

        $this->_set_uri_string();

        $this->_setSegments();

        $this->_setUriParams();

        $this->_setControllerAndMethod();
    }

    protected function _set_uri_string()
    {
        $this->uri_prefix = str_replace('/' . config('app.index_page'), '', $_SERVER['SCRIPT_NAME']);
        $this->uri_string = preg_replace('~^' . $this->uri_prefix . '/(' . config('app.index_page') . ')?/?~', '', $_SERVER['REQUEST_URI']);
        $this->uri_string = preg_replace('~\?.*~', '', $this->uri_string);
    }

    protected function _setSegments()
    {
        $this->segments = explode('/', $this->uri_string);
    }

    protected function _setUriParams()
    {
        $this->uri_params = array_values(array_slice($this->segments, 2));
    }

    protected function _setControllerAndMethod()
    {
        if ($this->uri_string && $this->uri_string != $this->uri_prefix) {
            $this->controller = $this->segments[0];

            if (isset($this->segments[1])) {
                $this->method = $this->segments[1];
            }
        }
    }
}