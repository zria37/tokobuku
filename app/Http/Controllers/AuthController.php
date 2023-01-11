<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registrasi()
    {
        return view('registrasi');
    }

    public function authLogin(Request $request)
    {
        // dd('untuk cek test error');
        $validate = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

       if(Auth::attempt($validate)) {
            // untuk mengecek status 
            if(Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('massage', 'Your Account is not active. Please contact Admin!');
                return redirect('/login');
            }else{
                $request->session()->regenerate();
                if(Auth::user()->role_id == '1') {
                    return redirect('/dashboard');
                }else{
                    return redirect('/profile');
                }
            }

        }elseif(Auth::user()->username != $request->input('username') && Auth::user()->password == $request->input('password')){
            Session::flash('status', 'failed');
            Session::flash('massage', 'Username failed');
            return redirect('/login');
        }elseif(Auth::user()->username == $request->input('username') && Auth::user()->password != $request->input('password')){
            Session::flash('status', 'failed');
            Session::flash('massage', 'password failed');
            return redirect('/login');
        }else{
            Session::flash('status', 'failed');
            Session::flash('massage', 'login failed');
            return redirect('/login');
        }
        // dd(Auth::user());
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function authregist(Request $request)
    {
        $request['password']= Hash::make($request->password);
        // dd($request->password);
        $user = User::create($request->all());
        
        Session::flash('status', 'success');
        Session::flash('massage', 'Username success register wait for Approve admin');
        return redirect('registrasi');
    }
}