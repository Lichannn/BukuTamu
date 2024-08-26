<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function registerView(){
        return view('admin.register');
    }
    public function registerPost(Request $request){
        $request->validate([
            "nama" => "required|max:255",
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password =  bcrypt($request->password);
        if($user->save()) {
            return redirect(route('viewLogin'))->with('success', 'Berhasil register, silahkan login');
        } else {
            return redirect('/register')->with('error', 'Gagal register, coba lagi');
        }
    }

    public function loginView(){
        return view('login');
    }
}
