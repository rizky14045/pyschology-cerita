<?php

namespace App\Http\Controllers\Admin;

use App\Models\Topic;
use App\Models\Psychology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PsychologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['psychologies'] = Psychology::latest()->paginate(25);
        return view('admin.psychology.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['topics'] = Topic::all();
        return view('admin.psychology.create',$data);
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
            'name' => 'required',
            'number_license' => 'required|integer',
            'psychology_image' => 'required|image|mimes:jpg,jpeg,png|max:4096',
            'education' => 'required',
            'motto' => 'required',
            'experience' => 'required',
            'topics' => 'required',
            'personal_character' => 'required',
        ]);

        $psychology = Psychology::latest()->first();

        if($psychology){
            $number = $psychology->id + 1;
        }else{
            $number = 1 ;
        }

        $requestData = $request->all();

        $requestData['topics'] =  json_encode($request->topics);
        $requestData['code'] =  'PSY-'.$number;

        if($request->hasFile('psychology_image'))
        {
            $file= $request->file('psychology_image');

            $image_name = 'bagikan-cerita-psychology-' . time() .'.'. $file->getClientOriginalExtension();

            Image::make($request->file('psychology_image'))->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/psychology_image/'.$image_name);

            $requestData['psychology_image'] = $image_name;
        }
        
        Psychology::create($requestData);

        Alert::success('Success', 'Psychology Has been created successfully');
        return redirect()->route('admin.psychology.index');
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
        $data['psychology'] = Psychology::where('id', $id)->first();
        $data['topics'] = Topic::all();
        return view('admin.psychology.update',$data);
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
      
        $psychology = Psychology::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('psychology_image'))
        {
            $this->validate($request, [
                'psychology_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);

            $file= $request->file('psychology_image');

            $image_name = 'bagikan-cerita-psychology-' . time() .'.'. $file->getClientOriginalExtension();

            if($psychology->psychology_image){      

                unlink(public_path('uploads/psychology_image/'.$psychology->psychology_image));

                Image::make($request->file('psychology_image'))->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/psychology_image/'.$image_name);

            }else{

                Image::make($request->file('psychology_image'))->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/psychology_image/'.$image_name);
                
            }
            $requestData['psychology_image'] = $image_name;
        }

        $psychology->update($requestData);

        Alert::success('Success', 'Psychology Has been updated successfully');
        return redirect()->route('admin.psychology.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psychology = Psychology::where('id',$id)->first();

        if($psychology->psychology_image){
            unlink(public_path('uploads/psychology_image/'.$psychology->psychology_image));
        }

        $psychology->delete();

        Alert::success('Success', 'Psychology Has been updated successfully');
        return redirect()->route('admin.psychology.index');
    }
}
