<?php


namespace App\Http\Controllers;


class Login extends Controller
{
    public function index()
    {
        $this->view("views/home.php", ['data' => 'Login index']);
    }

    public function get()
    {
        $this->view("views/home.php", ['data' => 'Login GET']);
    }
}