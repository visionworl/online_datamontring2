<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\registrationModel;

class registrationController extends Controller
{

    public function registration(){
        return view('admin.registration');

      }
      public function dashboard(){
        return view('admin.dashboard');

      }
    public function storeregistration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:2',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new registrationModel();
        $user->full_name = $request->input('full_name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password = bcrypt($request->input('password'));
        $user->confirm_password = bcrypt($request->input('confirm_password'));
       if( $user->save()){
        return redirect()->route('admin.dashboard');
       }

        return redirect()->route('admin.dashboard')->with('success','You are Sucessfully register ');
    }

    public function login()
{
    $condition = false;

    $title = $condition ? 'admin' : 'Login to Your Account';

    return view('admin.login', compact('title'));
}


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (\Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->route('admin.dashboard')->withErrors(['login' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
