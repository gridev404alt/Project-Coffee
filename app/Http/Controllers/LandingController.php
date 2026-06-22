<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function menu()
    {
        return view('menu');
    }

    public function review()
    {
        return view('review');
    }

    public function book()
    {
        return view('book');
    }

    public function notFound()
    {
        return view('errors.404');
    }
}
