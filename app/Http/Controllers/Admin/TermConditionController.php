<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TermCondition;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TermConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['term_conditions'] = TermCondition::latest()->paginate(25);

        return view('admin.term-condition.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.term-condition.create');
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
            'description' => 'required',
        ]);

        $requestData = $request->all();
        
        TermCondition::create($requestData);

        Alert::success('Success', 'TermCondition Has been created successfully');
        return redirect()->route('admin.term-condition.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermCondition  $termCondition
     * @return \Illuminate\Http\Response
     */
    public function show(TermCondition $termCondition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermCondition  $termCondition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['term_condition'] = TermCondition::where('id', $id)->first();
        return view('admin.term-condition.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TermCondition  $termCondition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $termCondition = TermCondition::where('id', $id)->first();

        $requestData = $request->all();

        $termCondition->update($requestData);

        Alert::success('Success', 'TermCondition Has been updated successfully');
        return redirect()->route('admin.term-condition.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermCondition  $termCondition
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $termCondition = TermCondition::where('id', $id)->first();

        $termCondition->delete();

        Alert::success('Success', 'TermCondition Has been updated successfully');
        return redirect()->route('admin.term-condition.index');
    }
}
