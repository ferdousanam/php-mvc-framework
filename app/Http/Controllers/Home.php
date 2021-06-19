<?php


namespace App\Http\Controllers;


class Home extends Controller
{
    public function index()
    {
        view("home", ['data' => 'Home index']);
    }
}
