<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Companies;
use App\Models\CompanyList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    private $dttm;

    public function __construct()
    {
        $this->dttm = now();
    }
    
    // Display All Company on Recruiter
    public function showCompanyAll() {
        $companyCount = Companies::join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->count(); // count all companies by recruiter
        $companies = DB::table('companies as c')->select('c.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories')->leftJoin('company_lists as cl', 'cl.id', '=', 'c.company_id')->where('c.status', '1')->where('c.recruiter_id', Auth::id())->orderByDesc('c.id')->get();

        $allCompany = CompanyList::where('company_lists.status', '1')->count(); // count all companies
        
        $getAllCompany = CompanyList::select('company_lists.id', 'company_lists.company_logo', 'company_lists.company_name', 'company_lists.company_categories', 'companies.company_id', 'companies.recruiter_id')->join('companies', 'companies.company_id', '=', 'company_lists.id')->where('company_lists.status', '1')->where('companies.recruiter_id', '!=' , Auth::id())->get();
        
        return view('recruiter.company.company', compact('companies', 'allCompany', 'getAllCompany', 'companyCount'));
    }

    // Search Company on Modal
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

    // Show Company Information by ID
    public function showCompanyID($id){
        $idCheck = Companies::where('status', 1)->where('recruiter_id', Auth::id())->where('id', $id)->exists();
        
        $companiesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.id', '=', $id)->get();
        
        if($idCheck){
            return view('recruiter.company.view', compact('companiesInfo'));
        }

        return redirect()->route('recruiter_companyAll');
    }
    // Edit Company Information by ID
    public function showEditCompanyID($id){
        $idCheck = Companies::where('status', 1)->where('recruiter_id', Auth::id())->where('id', $id)->exists();
       
        $editCompaniesInfo = CompanyList::join('companies', 'companies.company_id', '=', 'company_lists.id')->where('companies.status', '1')->where('companies.recruiter_id', Auth::id())->where('companies.id', '=', $id)->get();

        if($idCheck){
            return view('recruiter.company.edit', compact('editCompaniesInfo'));
        }

        return redirect()->route('recruiter_companyAll');
    }
    // Add More Company by Click Add button in Modal
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

        return redirect()->route('recruiter_companyAll')->with('warning','Ooppss, Something went wrong!');
    }

    // Archive Company by click Archive Button
    public function archiveCompanyID($id){
        Companies::where('recruiter_id', '=', Auth::id())->where('id', '=', $id)->update(['status' => '0', 'updated_at' => $this->dttm]);
        
        return redirect()->route('recruiter_companyAll')->with('success','Company Archived.');
    }

    // Creating New Company
    public function AddCompany(CompanyRequest $request){

        $request->validated();

        if($request->hasFile('logo')){
            $logoName = time().'_'.$request->logo->getClientOriginalName();
            //$request->logo->storeAs('company/logo', $logoName);  
            $request->logo->move(public_path('assets/company/logo'), $logoName);
        }
        if($request->hasFile('cover')){
            $timeCover = time() + 1000;
            $coverName = $timeCover.'_'.$request->cover->getClientOriginalName();  
            $request->cover->move(public_path('assets/company/cover'), $coverName);
        }

        $dttm = now();
        $status = '1';

        $companyData = CompanyList::create([
            'company_logo' => $logoName,
            'company_bg' => $coverName,
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_description' => $request->company_about,
            'company_phone' => $request->company_phone,
            'company_founded' => $request->company_founded,
            'company_categories' => $request->company_categories,
            'company_size' => $request->company_size,
            'company_address' => $request->company_address,
            'company_website' => $request->company_website,
            'company_facebook' => $request->company_facebook,
            'company_linkedin' => $request->company_linkedin,
            'company_twitter' => $request->company_twitter,
            'company_instagram' => $request->company_instagram,
            'status' => $status,
            'created_at' => $dttm,
        ]);

        if(!$companyData->save()){
            if(File::exists(public_path('assets/company/logo/'.$logoName))){
                File::delete(public_path('assets/company/logo/'.$logoName));
            }
            if(File::exists(public_path('assets/company/cover/'.$coverName))){
                File::delete(public_path('assets/company/cover/'.$coverName));
            }
        }

        Companies::create([
            'company_id' => $companyData['id'],
            'recruiter_id' => Auth::id(),
            'status' => $status,
        ]);

        return redirect()->route('recruiter_companyAll')->with('success','Company Created Successfully');;
    } 
}
