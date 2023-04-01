<?php

namespace App\Http\Controllers\Admin;

use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['prices'] = Price::latest()->get();

        return view('admin.price.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.price.create');
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
            'title' => 'required',
            'price' => 'required|integer',
        ]);

        $requestData = $request->all();
        
        Price::create($requestData);

        Alert::success('Success', 'Price Has been created successfully');
        return redirect()->route('admin.price.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['price'] = Price::where('id', $id)->first();
        return view('admin.price.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
        ]);
        $price = Price::where('id', $id)->first();
        
        $requestData = $request->all();

        $price->update($requestData);

        Alert::success('Success', 'Price Has been updated successfully');
        return redirect()->route('admin.price.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $price = Price::where('id',$id)->first();

        $price->delete();

        Alert::success('Success', 'Price Has been updated successfully');
        return redirect()->route('admin.price.index');
    }
}
