<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyList;
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

    public function showDashboard(){
        return view('recruiter.dashboard.index');
    }

    public function showRegister(){
        return view('recruiter.auth.register');
    }

    public function showLogin(){
        return view('recruiter.auth.login');
    }

    public function showPost() {
        return view('recruiter.post.post');
    }

    public function showJobPost() {
        return view('recruiter.post.jobs');
    }

    public function showCompanyAll() {
        $companyCount = Companies::join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->count(); // count all companies by recruiter
        $companies = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '=', '1')->where('companies.recruiter_id', '=', Auth::id())->orderBy('companies.id', 'DESC')->get();
        $allCompany = CompanyList::where('company_lists.status', '1')->count(); // count all companies
        $getAllCompany = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('company_lists.status', '1')->inRandomOrder()->get(); // get all companies data and by random 
        return view('recruiter.company.company', compact('companies', 'allCompany', 'getAllCompany', 'companyCount'));
    }

    public function createCompany() {
        return view('recruiter.company.create');
    }

    public function showCompanyID($id){
        $idCheck = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.company_id', '=', $id)->exists();
        $companiesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.company_id', '=', $id)->get();
        if($idCheck){
            return view('recruiter.company.view', compact('companiesInfo'));
        }
        return redirect()->route('recruiter_companyAll');
    }

    public function showEditCompanyID($id){
        $idCheck = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.company_id', '=', $id)->exists();
        $editCompaniesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.company_id', '=', $id)->get();
        if($idCheck){
            return view('recruiter.company.edit', compact('editCompaniesInfo'));
        }
        return redirect()->route('recruiter_companyAll');
    }

    public function archiveCompanyID($id){
        $dttm = now();
        Companies::where('company_uid', '=', Auth::id())->where('id', '=', $id)->update(['status' => '1', 'updated_at' => $dttm]);
        return redirect()->route('recruiter_companyAll');
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

        return redirect()->route('recruiter_dashboard');
    }

    public function destroy(){
        Auth::guard('recruiter')->logout();
        return redirect()->route('recruiter_login');
        //return redirect()->route('recruiter_login');
    }
}
