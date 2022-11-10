<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function master()
    {
        return view('template.master');
    }
    public function index()
    {
        return view ('account.index');
    }
    public function create()
    {
        return view ('account.create');
    }
    public function show()
    {
        return view ('account.show');
    }
    public function table()
    {
        return view ('account.table');
    }
    public function data_tables()
    {
        return view ('account.data_tables');
    }
    
}
