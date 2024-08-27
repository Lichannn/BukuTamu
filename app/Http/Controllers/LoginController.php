<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function registerView(){
        return view('admin.register');
    }
    public function registerPost(Request $request){
        $request->validate([
            "nama" => "required|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required",
        ]);

        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password =  bcrypt($request->password);
        if($user->save()) {
            return redirect('/')->with('success', 'Berhasil register, silahkan login');
        } else {
            return redirect('/register')->with('error', 'Gagal register, coba lagi');
        }
    }

    public function loginView(){
        return view('admin.login');
    }


    public function loginPost(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboardView'));
        } 
        return view('login');
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
