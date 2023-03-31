<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required'
           ]);

           $user_data = [
               'email'  => $request->get('email'),
               'password' => $request->get('password')
           ]
         ;

           if(Auth::attempt($user_data))
           {
            Alert::success('Success', 'Login Successfully');
            return redirect()->route('admin.dashboard.index');
           }
           else
           {
            Alert::error('Error', 'Email or Password is incorrect');
            return redirect()->route('login');
           }
    }
    public function logout(){


        Alert::success('Success', 'Logout Successfully');
        Auth::logout();
        return redirect()->route('login');
    }
}
