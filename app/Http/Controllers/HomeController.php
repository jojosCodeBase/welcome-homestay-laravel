<?php

namespace App\Http\Controllers;

use App\Models\VisitorCount;

class HomeController extends Controller
{
    public function home()
    {
        $visitor_count = VisitorCount::count();
        return view('home', compact('visitor_count'));
    }
    public function about()
    {
        $visitor_count = VisitorCount::count();
        return view('about', compact('visitor_count'));
    }
    public function gallery()
    {
        $visitor_count = VisitorCount::count();
        return view('gallery', compact('visitor_count'));
    }
    public function places()
    {
        $visitor_count = VisitorCount::count();
        return view('places', compact('visitor_count'));
    }
}
