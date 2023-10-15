<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recruiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RecruiterController extends Controller
{
    public function showLogin(){
        return view('recruiter.auth.login');
    }

    public function showDashboard(){
        return view('recruiter.dashboard.index');
    }

    public function showRegister(){
        return view('recruiter.auth.register');
    }
    
    public function Login(Request $request){
        $recruiter = $request->all();

        if(Auth::guard('recruiter')->attempt(['email' => $recruiter['email'], 'password' => $recruiter['password']])){
            return redirect()->route('recruiter_dashboard');
        }else{
            return back()->with('msg', 'Error');
        }
    }

    public function Create(Request $request){
        $request->validate([
            'firstname' => ['required', 'alpha', 'min:2'],
            'lastname' => ['required', 'alpha', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required',  Rules\Password::defaults()],
        ]);

        $dttm = now();

        $recruiter = Recruiter::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => $dttm = now(),
        ]);

        DB::table('recruiter_information')->insert([
            [
                'uid' => $recruiter['id'],
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'created_at' => $dttm
            ]
        ]);

        return redirect()->route('recruiter_login');
    }

    public function destroy(){
        Auth::guard('recruiter')->logout();
        return redirect()->route('recruiter_login')->with('msg', '');
        //return redirect()->route('recruiter_login');
    }
}
