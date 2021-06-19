<?php


namespace App\Http\Controllers;


class Login extends Controller
{
    public function index()
    {
        view("home", ['data' => 'Login index']);
    }

    public function get()
    {
        view("home", ['data' => 'Login get']);
    }
}