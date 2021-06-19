<?php


namespace App\Http\Controllers;


class Login extends Controller
{
    public function index()
    {
        view("home", ['data' => 'Login index']);
    }

    public function get($a = null, $b = null)
    {
        view("home", ['data' => 'Login get', 'params' => [$a, $b]]);
    }
}