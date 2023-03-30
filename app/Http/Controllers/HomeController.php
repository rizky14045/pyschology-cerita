<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function doctor()
    {
        return view('frontend.doctors');
    }

    public function doctor_detail()
    {
        return view('frontend.doctor_detail');
    }

    public function blog()
    {
        return view('frontend.blogs');
    }

    public function blog_detail()
    {
        return view('frontend.blog_detail');
    }

    public function topic()
    {
        return view('frontend.topics');
    }
}
