<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = 'John Doe';
        return view('first', ['data' => $data, 'name' => 'Samantha']);
    }
}
