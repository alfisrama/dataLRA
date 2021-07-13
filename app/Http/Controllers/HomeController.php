<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        // $this->middleware('izin');
    }

    public function index()
    {
        $halaman = 'Home';
        return view('home', compact('halaman'));
    }
}
