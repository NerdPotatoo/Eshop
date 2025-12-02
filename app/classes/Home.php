<?php

namespace App\Classes;

class Home
{
    public function index()
    {
        return header('Location: action.php?page=home');
    }
}