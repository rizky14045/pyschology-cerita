<?php

namespace App\Http\Controllers\Admin;

use App\Models\Price;
use Ramsey\Uuid\Uuid;
use App\Models\Psychology;
use Illuminate\Http\Request;
use App\Models\PsychologyOrder;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PsychologyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orders'] = PsychologyOrder::latest()->paginate(25);
        return view('admin.psychology-order.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['psychologies'] = Psychology::all();
        $data['prices'] = Price::all();
        return view('admin.psychology-order.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_phone' => 'required',
            'psychology_id' => 'required',
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'source' => 'required',
            'number_counseling_session' => 'required',
            'price_id' => 'required',
        ]);

        $requestData = $request->all();
     
        $requestData['session_id'] = Uuid::uuid4();
        $requestData['status'] = 'Belum Selesai';

        PsychologyOrder::create($requestData);

        Alert::success('Success', 'Psychology Order Has been created successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($session)
    {
        $data['psychologies'] = Psychology::all();
        $data['prices'] = Price::all();
        $data['order'] = PsychologyOrder::where('session_id',$session)->first();
        return view('admin.psychology-order.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $session)
    {
        $request->validate([
            'client_name' => 'required',
            'client_phone' => 'required',
            'psychology_id' => 'required',
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'source' => 'required',
            'number_counseling_session' => 'required',
            'price_id' => 'required',
        ]);

        $order = PsychologyOrder::where('session_id',$session)->first();

        $requestData = $request->all();

        $order->update($requestData);

        Alert::success('Success', 'Psychology Order Has been updated successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($session)
    {
        $order = PsychologyOrder::where('session_id',$session)->first();

        $order->delete();

        Alert::success('Success', 'Psychology Order Has been updated successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    public function reschedule($session)
    {
        $data['order'] = PsychologyOrder::where('session_id',$session)->first();
        return view('admin.psychology-order.reschedule',$data);
    }

    public function rescheduleSave(Request $request,$session)
    {
        $request->validate([
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'number_counseling_session' => 'required',
        ]);

        $order = PsychologyOrder::where('session_id',$session)->first();
        $order->date = $request->date;
        $order->time_start = $request->time_start;
        $order->time_end = $request->time_end;
        $order->number_counseling_session = $request->number_counseling_session;
        $order->reschedule = true;
        $order->save();

        Alert::success('Success', 'Psychology Order Has been reschedule successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    public function extended($session)
    {
        $data['order'] = PsychologyOrder::where('session_id',$session)->first();
        return view('admin.psychology-order.extended',$data);
    }

    public function extendedSave(Request $request,$session)
    {
        $request->validate([
            'extended_counseling_minute' => 'required',
        ]);

        $order = PsychologyOrder::where('session_id',$session)->first();
        $order->extended_counseling_minute = $request->extended_counseling_minute;
        $order->extended = true;
        $order->save();

        Alert::success('Success', 'Psychology Order Has been extend successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    public function finish($session)
    {

        $order = PsychologyOrder::where('session_id',$session)->first();
        $order->status = 'Sudah Selesai';
        $order->save();

        Alert::success('Success', 'Psychology Order Has been finish successfully');
        return redirect()->route('admin.psychology-order.index');
    }

    

}
