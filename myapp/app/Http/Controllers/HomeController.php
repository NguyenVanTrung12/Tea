<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("giaodien.home");
    }
    public function about()
    {

        return view('giaodien.about');
    }

    public function menu()
    {
        return view('giaodien.menu');
    }

    public function blog()
    {
        return view('giaodien.blog');
    }

    public function contact()
    {
        return view('giaodien.contact');
    }
}