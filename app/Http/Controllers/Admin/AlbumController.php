<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['albums'] = Album::latest()->paginate(25);

        return view('admin.album.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
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
            'album_image' => 'required|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $requestData = $request->all();


        if($request->hasFile('album_image'))
        {
            $file= $request->file('album_image');


            $image_name = $file->getClientOriginalName();

            $file->move(public_path('uploads/album_image/'),$image_name);
            
            $requestData['album_image'] = $image_name;
        }
        
        Album::create($requestData);

        Alert::success('Success', 'Album Has been created successfully');
        return redirect()->route('admin.album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['album'] = Album::where('id', $id)->first();
        return view('admin.album.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $album = Album::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('album_image'))
        {
            $this->validate($request, [
                'album_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('album_image');
            $image_name = $file->getClientOriginalName();
            if($album->album_image){        
                unlink(public_path('uploads/album_image/'.$album->album_image));
                $file->move(public_path('uploads/album_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/album_image/'),$image_name);
            }
            $requestData['album_image'] = $image_name;
        }

        $album->update($requestData);

        Alert::success('Success', 'Album Has been updated successfully');
        return redirect()->route('admin.album.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album = Album::where('id',$id)->first();

        if($album->album_image){
            unlink(public_path('uploads/album_image/'.$album->album_image));
        }

        $album->delete();

        Alert::success('Success', 'Album Has been updated successfully');
        return redirect()->route('admin.album.index');
    }
}
