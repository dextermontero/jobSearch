<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class CompanyController extends Controller
{
    

    public function AddCompany(CompanyRequest $request){
        $request->validated();

        if($request->hasFile('logo')){
            $logoName = time().'_'.$request->logo->getClientOriginalName();
            //$request->logo->storeAs('company/logo', $logoName);  
            $request->logo->move(public_path('assets/company/logo'), $logoName);
        }
        if($request->hasFile('cover')){
            $time = time() + 1000;
            $coverName = $time.'_'.$request->cover->getClientOriginalName();  
            $request->cover->move(public_path('assets/company/cover'), $coverName);
        }

        $dttm = now();

        Companies::create([
            'company_uid' => Auth::id(),
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
            'created_at' => $dttm,
        ]);

        return redirect()->route('recruiter_companyAll');
    } 
}
