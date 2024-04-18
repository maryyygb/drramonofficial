<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
// use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Mail\Websitemail;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('teacher.dashboard');
    }
    public function login()
    {
        return view('teacher.login');
    }
    public function login_submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

        if(Auth::guard('teacher')->attempt($data)) {
            return redirect()->route('teacher_dashboard')->with('success', 'Login Successful!');
        } else {
            return redirect()->route('teacher_login')->with('error', 'Please check, your credentials are invalid.');
        }
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher_logout')->with('success', 'You logout successfully!');
    }
    //
}
