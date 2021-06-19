<?php


namespace App\Http\Controllers;


class Home extends Controller
{
    public function index()
    {
        $this->view("views/home.php", ['data' => 'Home index']);
    }
}
