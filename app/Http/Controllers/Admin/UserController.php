<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        $requestData = $request->all();

        if($request->hasFile('profile_image'))
        {
            $this->validate($request, [
                'profile_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('profile_image');

            $image_name = $file->getClientOriginalName();

            $file->move(public_path('uploads/profile_image/'),$image_name);
            
            $requestData['profile_image'] = $image_name;
        }
        $requestData['password'] = bcrypt($request->password);
        
        User::create($requestData);

        Alert::success('Success', 'User Has been created successfully');
        return redirect()->route('admin.user.index');
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
        $data['user'] = User::where('id', $id)->first();
        return view('admin.user.update',$data);

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
        $user = User::where('id', $id)->first();

        $requestData = $request->all();

        if($requestData['password'] != null) {
            $requestData['password'] = bcrypt($request->password);
        } else {
            $requestData['password'] = $user->password;
        }

        if($request->hasFile('profile_image'))
        {
            $this->validate($request, [
                'profile_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('profile_image');
            $image_name = $file->getClientOriginalName();
            if($user->profile_image){
                
                unlink(public_path('uploads/profile_image/'.$user->profile_image));
                $file->move(public_path('uploads/profile_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/profile_image/'),$image_name);
            }
            $requestData['profile_image'] = $image_name;
        }

        $user->update($requestData);

        Alert::success('Success', 'User Has been updated successfully');
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->first();

        if($user->profile_image){
            unlink(public_path('uploads/profile_image/'.$user->profile_image));
        }

        $user->delete();

        Alert::success('Success', 'User Has been updated successfully');
        return redirect()->route('admin.user.index');
    }
    public function editProfile(){
        
        return view('admin.user.edit-profile');
    }

    public function updateProfile(Request $request){

        $user = User::where('id',Auth::user()->id)->first();

        if($request->hasFile('profile_image'))
        {
            $this->validate($request, [
                'profile_image' => 'image|mimes:jpg,jpeg,png|max:4096'
            ]);
            $file= $request->file('profile_image');
            $image_name = $file->getClientOriginalName();
            if($user->profile_image){
        
                unlink(public_path('uploads/profile_image/'.$user->profile_image));
                $file->move(public_path('uploads/profile_image/'),$image_name);
            }else{
                $file->move(public_path('uploads/profile_image/'),$image_name);
            }
            $user->profile_image = $image_name;
        }
        $user->name = $request->name;
        $user->save();

        Alert::success('Success', 'User Has been updated successfully');
        return redirect()->route('admin.user.edit-profile');
    }
    public function changePassword(Request $request){

        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required',
            'password_confirmation' => 'string|required_with:password_confirmation|same:password_confirmation'
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        // dd($user);
        if( Hash::check($request->current_password,$user->password) ){
            $user->password = bcrypt($request->password);
            $user->save();

            Alert::success('Success', 'User Has been updated successfully');
            return redirect()->route('admin.user.edit-profile');
        } else {
            Alert::error('Error', 'Your password not match');
            return redirect()->route('admin.user.edit-profile');
        }
    }
}
