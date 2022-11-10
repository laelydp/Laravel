<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunContoller extends Controller
{
    public function index()
    {
        return view('templte.index');
    }
    public function Form()
    {
        return view ('template.create');
    }
}