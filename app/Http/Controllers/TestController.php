<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /* public function index()
    {
        $data = 'John Doe';
        return view('first', ['data' => $data, 'name' => 'Samantha']);
    } */

    public function index($name)
    {
        $data = $name;
        return view('first', ['data' => $data, 'name' => $name]);
    }
}
