<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function register()
    {
        return view('User.register');
    }

    public function login() {
        return view('User.login');
    }


    public function store(Request $req) {
        DB::table('students')-> insert([
            'name' => $req->name,
            'email' => $req->email,
            'created_at' => now(),
            'password' => Hash::make($req->password)
        ]);
        return redirect('/users/login');
    }


    public function show_profile($email){
        $student = DB::table('students')-> find($email);
        return view('User.profile',compact('student'));
    }
}
