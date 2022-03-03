<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['title' => '- Home Page', 'status' => 'active']);
    }
    public function product()
    {
        return view('product', ['title' => '- Home Product', 'status' => 'active']);
    }
    public function program()
    {
        return view('program', ['title' => '- Home Program', 'status' => 'active']);
    }
    public function news()
    {
        return view('news', ['title' => '- Home News', 'status' => 'active']);
    }
    public function about()
    {
        return view('about', ['title' => '- About Us', 'status' => 'active']);
    }
    public function contact()
    {
        return view('contact', ['title' => '- Contact Us', 'status' => 'active']);
    }
    
}

