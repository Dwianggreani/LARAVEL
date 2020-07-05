<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function tambah()
    {
        return view ('tambah');
    }

    public function profile()
    {
        return view ('profile');
    }
    
}
