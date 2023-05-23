<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PsychologyOrder;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $events = [];
        $order =PsychologyOrder::where('status','Belum Selesai')
                ->get();
        
        foreach ($order as $item) {
            $events[] = [
                'title' => $item->client_name.' - '.$item->client_email.' - '.$item->psychology->name,
                'start' => $item->date.'T'.$item->time_start,
                'end' => $item->date.'T'.$item->time_end,
                'color' =>sprintf("#%06x",rand(0,16777215)),
                'textColor' =>'#fffff',
                'allDay'=>false
            ];
        }

        return view('admin.dashboard.index',compact('events'));
    }
}
