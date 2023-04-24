<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function update($id, $otro = null) 
    {
        return "Update page: $id - $otro";
    }
}