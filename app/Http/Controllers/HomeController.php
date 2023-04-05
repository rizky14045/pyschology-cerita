<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about_us()
    {
        return view('frontend.about_us');
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
        $data['topics'] = Topic::all();

        return view('frontend.topics', $data);
    }

    public function services()
    {
        return view('frontend.service');
    }
}
