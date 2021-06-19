<?php


namespace App\Http\Controllers;


class Home extends Controller
{
    public function index()
    {
        $this->view("home", ['data' => 'Home index']);
    }
}
