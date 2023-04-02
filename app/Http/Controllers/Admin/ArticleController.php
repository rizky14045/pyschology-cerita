<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = Article::latest()->paginate(25);

        return view('admin.article.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            'body' => 'required',
        ]);

        $requestData = $request->all();

        $requestData['user_id'] = Auth::user()->id;

        if($request->hasFile('banner_image'))
        {
            $this->validate($request, [
                'banner_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('banner_image');


            $image_name = $file->getClientOriginalName();

            $file->move(public_path('uploads/banner_image/'),$image_name);
            
            $requestData['banner_image'] = $image_name;
        }
        
        Article::create($requestData);

        Alert::success('Success', 'Article Has been created successfully');
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['article'] = Article::where('id', $id)->first();
        return view('admin.article.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();

        $requestData = $request->all();

        if($request->hasFile('banner_image'))
        {
            $this->validate($request, [
                'banner_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('banner_image');
            $image_name = $file->getClientOriginalName();
            if($article->banner_image){
                
                unlink(public_path('uploads/banner_image/'.$article->banner_image));
                $file->move(public_path('uploads/banner_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/banner_image/'),$image_name);
            }
            $requestData['banner_image'] = $image_name;
        }

        $article->update($requestData);

        Alert::success('Success', 'Article Has been updated successfully');
        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::where('id',$id)->first();

        if($article->banner_image){
            unlink(public_path('uploads/banner_image/'.$article->banner_image));
        }

        $article->delete();

        Alert::success('Success', 'Article Has been updated successfully');
        return redirect()->route('admin.article.index');
    }
    public function uploadImage(Request $request) {		
        if($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
            
                $request->file('upload')->move(public_path('uploads/article/'), $fileName);
       
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('uploads/article/'.$fileName); 
                $msg = 'Image uploaded successfully'; 
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                   
                @header('Content-type: text/html; charset=utf-8'); 
                echo $response;
            }
        }	
}
