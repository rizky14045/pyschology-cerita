<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimony;
use App\Models\Psychology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonies'] = Testimony::latest()->paginate(25);

        return view('admin.testimony.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['psychologies'] = Psychology::all();
        return view('admin.testimony.create',$data);
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
            'description' => 'required',
        ]);

        $requestData = $request->all();


        if($request->hasFile('client_image'))
        {
            $this->validate($request, [
                'client_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('client_image');
            
            $image_name = 'bagikan-cerita-testimony-' . time() .'.'. $file->getClientOriginalExtension();

            Image::make($file)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/testimony_image/'.$image_name);
            
            $requestData['client_image'] = $image_name;
        }
        
        Testimony::create($requestData);

        Alert::success('Success', 'Testimony Has been created successfully');
        return redirect()->route('admin.testimony.index');
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
    public function edit($id)
    {
        $data['testimony'] = Testimony::where('id', $id)->first();
        $data['psychologies'] = Psychology::all();
        return view('admin.testimony.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $testimony = Testimony::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('client_image'))
        {
            $this->validate($request, [
                'client_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);

            $file= $request->file('client_image');

            $image_name = 'bagikan-cerita-testimony-' . time() .'.'. $file->getClientOriginalExtension();

            if($testimony->client_image){
                
                unlink(public_path('uploads/testimony_image/'.$testimony->client_image));

                $image_name = 'bagikan-cerita-testimony-' . time() .'.'. $file->getClientOriginalExtension();

                Image::make($file)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/testimony_image/'.$image_name);

            }else{

                Image::make($file)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/testimony_image/'.$image_name);

            }
            $requestData['client_image'] = $image_name;
        }

        $testimony->update($requestData);

        Alert::success('Success', 'Testimony Has been updated successfully');
        return redirect()->route('admin.testimony.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = Testimony::where('id',$id)->first();

        if($testimony->client_image){
            unlink(public_path('uploads/testimony_image/'.$testimony->client_image));
        }

        $testimony->delete();

        Alert::success('Success', 'Testimony Has been updated successfully');
        return redirect()->route('admin.testimony.index');
    }
}
