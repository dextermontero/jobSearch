<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyList;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recruiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Validator;

class RecruiterController extends Controller
{
    
    private $dttm;

    public function __construct()
    {
        $this->dttm = now();
    }
    
    public function showDashboard(){
        $postCount = JobPost::where('recruiter_id', Auth::id())->count(); // Count All Job Post / archived by recruiter
        $companyCount = Companies::where('recruiter_id', Auth::id())->count(); // count all companies added/archived by recruiter
        return view('recruiter.dashboard.index', compact('postCount', 'companyCount'));
    }

    public function showAllApplicant(){
        return view('recruiter.applicant.index');
    }

    public function showApplicant(){
        return view('recruiter.applicant.view');
    }

    public function showRegister(){
        return view('recruiter.auth.register');
    }

    public function showLogin(){
        return view('recruiter.auth.login');
    }

    public function showJobPost() {
        return view('recruiter.post.jobs');
    }

    public function createCompany() {
        return view('recruiter.company.create');
    }

    public function postToEdit($id) {
        $postCheck = JobPost::where('recruiter_id', Auth::id())->where('id', $id)->exists();
        $postInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.id', '=', $id)->get();
        
        $statusCheck = JobPost::select('status')->where('id', $id)->where('recruiter_id', Auth::id())->get();
        if($postCheck){
            foreach($statusCheck as $key){
                if($key->status === 1 || $key->status === 2){
                    return view('recruiter.post.edit', compact('postInfo'));
                }
            }
            return redirect()->route('recruiter_post')->with('warning','Ooppss, Something went wrong!'); 
        }
        return redirect()->route('recruiter_post');
    }
    
    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::guard('recruiter')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('recruiter_dashboard');
        }

        return Redirect::back()->withErrors(['loginErr' => 'Incorrect Email address or Password. Please try again!']);
    }

    public function Create(Request $request){
        $request->validate([
            'firstname' => ['required', 'alpha', 'min:2'],
            'lastname' => ['required', 'alpha', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Recruiter::class],
            'password' => ['required',  Rules\Password::defaults()],
        ]);

        $recruiter = Recruiter::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => $this->dttm,
        ]);

        DB::table('recruiter_information')->insert([
            [
                'uid' => $recruiter['id'],
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'created_at' => $this->dttm
            ]
        ]);

        if(Auth::guard('recruiter')->attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('recruiter_dashboard');
        }
    }

    public function destroy(){
        Auth::guard('recruiter')->logout();
        return redirect()->route('recruiter_login');
        //return redirect()->route('recruiter_login');
    }
}
