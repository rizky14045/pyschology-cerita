<?php

namespace App\Http\Controllers\Admin;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['topics'] = Topic::latest()->get();

        return view('admin.topic.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topic.create');
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
            'topic_name' => 'required',
            'description' => 'required',
        ]);

        $requestData = $request->all();


        if($request->hasFile('topic_image'))
        {
            $this->validate($request, [
                'topic_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('topic_image');


            $image_name = $file->getClientOriginalName();

            $file->move(public_path('uploads/topic_image/'),$image_name);
            
            $requestData['topic_image'] = $image_name;
        }
        
        Topic::create($requestData);

        Alert::success('Success', 'Topic Has been created successfully');
        return redirect()->route('admin.topic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['topic'] = Topic::where('id', $id)->first();
        return view('admin.topic.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topic = Topic::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('topic_image'))
        {
            $this->validate($request, [
                'topic_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('topic_image');
            $image_name = $file->getClientOriginalName();
            if($topic->topic_image){
                
                unlink(public_path('uploads/topic_image/'.$topic->topic_image));
                $file->move(public_path('uploads/topic_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/topic_image/'),$image_name);
            }
            $requestData['topic_image'] = $image_name;
        }

        $topic->update($requestData);

        Alert::success('Success', 'Topic Has been updated successfully');
        return redirect()->route('admin.topic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::where('id',$id)->first();

        if($topic->topic_image){
            unlink(public_path('uploads/topic_image/'.$topic->topic_image));
        }

        $topic->delete();

        Alert::success('Success', 'Topic Has been updated successfully');
        return redirect()->route('admin.topic.index');
    }
}
