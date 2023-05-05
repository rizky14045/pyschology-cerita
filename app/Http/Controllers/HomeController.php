<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Album;
use App\Models\Topic;
use App\Models\Header;
use App\Models\Product;
use App\Models\Psychology;
use App\Models\Setting;
use App\Models\Testimony;
use Illuminate\Http\Request;
use App\Models\TermCondition;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Layanan Konseling Psikolog Profesional',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => 'Bagikan Ceritamu,bagikan ceritamu,ayo bercerita,psikolog,konseling,psikologi,konseling psikologi,galau,keresahan'
        ];
        $data['albums'] = Album::latest()->limit(9)->get();
        $data['testimonies'] = Testimony::latest()->limit(10)->get();
        $data['online'] = Product::where('type', 'Online')->get();
        $data['offline'] = Product::where('type', 'Offline')->get();
        $data['header'] = Header::where('position', 'Homepage')->first();


        return view('frontend.index', $data);
    }

    public function about_us()
    {
        $data = [
            'title' => 'Tentang Kami',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        return view('frontend.about_us',$data);
    }

    public function doctor(Request $request)
    {
        $data = [
            'title' => 'Psikologi',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];

        if($request){
            $data['doctors'] = Psychology::where('topics', 'like', '%' . $request->topic . '%')->get();
        }else{
            $data['doctors'] = Psychology::all();
        }

        return view('frontend.doctors', $data);
    }

    public function doctor_detail($code)
    {
        $data = [
            'title' => 'Detail Psikologi',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        $doctor =  Psychology::where('code', $code)->first();
        $data['doctor'] = $doctor;
        $data['testimonies'] = Testimony::where('psychology_id',$doctor->id)->get();

        // dd($data);

        return view('frontend.doctor_detail',$data);
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
        $data = [
            'title' => 'Topik Konseling',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        $data['topics'] = Topic::all();

        return view('frontend.topics', $data);
    }

    public function services()
    {
        $data = [
            'title' => 'Layanan Kami',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];

        return view('frontend.service',$data);
    }
    public function faq()
    {
        $data = [
            'title' => 'Faq',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        $data['faqs'] = Faq::all();
        return view('frontend.faq', $data);
    }
    public function termCondition()
    {
        $data = [
            'title' => 'Syarat dan Ketentuan',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        $data['termConditions'] = TermCondition::all();
        return view('frontend.term-condition', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami',
            'description' => ' Bagikan Ceritamu memberikan kebebasan padamu untuk bercerita apapun masalahnya dan bertemu dengan para psikolog profesional untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi yang kami terima akan kami jaga kerahasiaannya.',
            'keywords' => '',
        ];
        return view('frontend.contact', $data);
    }
}
