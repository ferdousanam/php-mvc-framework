<?php


namespace App\Http\Controllers;


class Login extends Controller
{
    public function index()
    {
        $this->view("home", ['data' => 'Login index']);
    }

    public function get()
    {
        $this->view("home", ['data' => 'Login get']);
    }
}