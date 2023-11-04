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
    
    private $dttm;

    public function __construct()
    {
        $this->dttm = now();
    }
    
    public function showDashboard(){
        $companyCount = Companies::join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->count(); // count all companies by recruiter
        return view('recruiter.dashboard.index', compact('companyCount'));
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

    public function showPost() {
        return view('recruiter.post.post');
    }

    public function showJobPost() {
        return view('recruiter.post.jobs');
    }

    public function showSearchCompany(Request $request) {
        $search = $request->search;

        $companies = Companies::select('companies.company_id', 'company_lists.company_logo', 'company_lists.company_name', 'company_lists.company_categories')->join('company_lists', 'company_lists.id', '=', 'companies.company_id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('company_lists.company_name', 'iLIKE', '%'.$search.'%')->get();

        $response = array();
        foreach($companies as $company){
            $response[] = array(
                "id"=> $company->company_id,
                "name"=> $company->company_name,
                "logo" => $company->company_logo,
                "category" => $company->company_categories
            );
        }
        return response()->json($response); 
    }

    public function showGetID(Request $request){

        if($request->id != ''){
            $showCompany = DB::table('company_lists as cl')->select('cl.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories')->where('cl.status', '1')->where('id', $request->id)->get();
            return response()->json(['dispCompany' => $showCompany]);
        }
    }

    public function createPost(Request $request){
        dd($request->all());
    }

    public function showCompanyAll() {
        $companyCount = Companies::join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->count(); // count all companies by recruiter
        $companies = DB::table('companies as c')->select('c.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories')->leftJoin('company_lists as cl', 'cl.id', '=', 'c.company_id')->where('c.status', '1')->where('c.recruiter_id', Auth::id())->orderByDesc('c.id')->get();

        $allCompany = CompanyList::where('company_lists.status', '1')->count(); // count all companies
        
        $getAllCompany = CompanyList::select('company_lists.id', 'company_lists.company_logo', 'company_lists.company_name', 'company_lists.company_categories', 'companies.company_id', 'companies.recruiter_id')->join('companies', 'companies.company_id', '=', 'company_lists.id')->where('company_lists.status', '1')->where('companies.recruiter_id', '!=' , Auth::id())->get();
        
        return view('recruiter.company.company', compact('companies', 'allCompany', 'getAllCompany', 'companyCount'));
    }

    public function createCompany() {
        return view('recruiter.company.create');
    }

    public function showCompanyID($id){
        $idCheck = Companies::where('status', 1)->where('recruiter_id', Auth::id())->where('id', $id)->exists();
        
        $companiesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.id', '=', $id)->get();
        
        if($idCheck){
            return view('recruiter.company.view', compact('companiesInfo'));
        }

        return redirect()->route('recruiter_companyAll');
    }

    public function showEditCompanyID($id){
        $idCheck = Companies::where('status', 1)->where('recruiter_id', Auth::id())->where('id', $id)->exists();
       
        $editCompaniesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.id', '=', $id)->get();

        if($idCheck){
            return view('recruiter.company.edit', compact('editCompaniesInfo'));
        }

        return redirect()->route('recruiter_companyAll');
    }

    /* Fixing searching with indicate add or added */
    public function searchCompany(Request $request){
        $company = DB::table('company_lists as cl')->select('cl.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories', 'cl.action')->where('cl.status', '1')->distinct('cl.id')->orderBy('cl.id', 'ASC')->get(); 
        
        $getId = Companies::select('company_id')->where('recruiter_id', Auth::id())->get();
        
        if($request->keyword != ''){
            $company = DB::table('company_lists as cl')->select('cl.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories')->where('cl.status', '1')->where('company_name', 'iLIKE', '%'.$request->keyword.'%')->get();
        }

        return response()->json([
            'getCompany' => $getId,
            'companies' => $company
        ]);
    }

    /* Done fixing queries */
    public function addMoreCompany($id){
        $clExists = CompanyList::where('status', 1)->where('id', $id)->exists(); // Check if ID is exists on table company_lists
        $cExists = Companies::where('company_id', $id)->where('recruiter_id', Auth::id())->exists(); // Check if ID is exists on table companies
        if($clExists){
            if(!$cExists){
                Companies::create([
                    'company_id' => $id,
                    'recruiter_id' => Auth::id(),
                    'status' => '1',
                    'created_at' => $this->dttm
                ]);
                return redirect()->route('recruiter_companyAll')->with('success','Company Added Successfully.');
            }else{
                return redirect()->route('recruiter_companyAll')->with('info','Company is already on your lists.');
            }
        }

        return redirect()->route('recruiter_companyAll')->with('warning','Something wrong!');
    }

    /* Done fixing queries */
    public function archiveCompanyID($id){
        Companies::where('recruiter_id', '=', Auth::id())->where('id', '=', $id)->update(['status' => '0', 'updated_at' => $this->dttm]);
        
        return redirect()->route('recruiter_companyAll')->with('success','Company Archived.');
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
