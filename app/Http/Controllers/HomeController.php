<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Topic;
use App\Models\Product;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['albums'] = Album::latest()->limit(9);
        $data['testimonies'] = Testimony::latest()->limit(10);
        $data['products'] = Product::all();

        return view('frontend.index',$data);
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
