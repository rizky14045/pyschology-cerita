<?php

namespace App\Http\Controllers\Admin;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['headers'] = Header::latest()->paginate(25);

        return view('admin.header.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.create');
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
            'header_image' => 'required|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $requestData = $request->all();


        if($request->hasFile('header_image'))
        {
            $file= $request->file('header_image');


            $image_name = 'bagikan-cerita-header-' . time() .'.'. $file->getClientOriginalExtension();


            $file->move(public_path('uploads/header_image/'),$image_name);
            
            $requestData['header_image'] = $image_name;
        }
        
        Header::create($requestData);

        Alert::success('Success', 'Header Has been created successfully');
        return redirect()->route('admin.header.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['header'] = Header::where('id', $id)->first();
        return view('admin.header.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $header = Header::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('header_image'))
        {
            $this->validate($request, [
                'header_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('header_image');
            $image_name = 'bagikan-cerita-header-' . time() .'.'. $file->getClientOriginalExtension();

            if($header->header_image){        
                unlink(public_path('uploads/header_image/'.$header->header_image));
                $file->move(public_path('uploads/header_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/header_image/'),$image_name);
            }
            $requestData['header_image'] = $image_name;
        }

        $header->update($requestData);

        Alert::success('Success', 'Header Has been updated successfully');
        return redirect()->route('admin.header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        $header = Header::where('id',$id)->first();

        if($header->header_image){
            unlink(public_path('uploads/header_image/'.$header->header_image));
        }

        $header->delete();

        Alert::success('Success', 'Header Has been updated successfully');
        return redirect()->route('admin.header.index');
    }
}
