<?php

namespace App\Http\Controllers\Admin;

use App\Models\Psychology;
use Illuminate\Http\Request;
use App\Models\PsychologyOrder;
use App\Http\Controllers\Controller;

class ExportDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['psychologist'] = Psychology::all();
        return view('admin.export-data.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export(Request $request)
    {
        $id = $request->psychology_id;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $data['psychology'] = Psychology::where('id', $id)->first()->name;
        $data['orders'] = PsychologyOrder::where('psychology_id',$id)
        ->whereBetween('date',[$startDate,$endDate])
        ->where('status','Sudah Selesai')
        ->get();

        return view('admin.export-data.export',$data);
    }

}
