<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobPostController extends Controller
{
    private $dttm;
    private $status;

    public function __construct()
    {
        $this->dttm = now();
        $this->status = '1';
    }
    // Display All Job Post By Recruiter
    public function showPost() {
        $allPost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.recruiter_id', Auth::id())->get();
        $inactivePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 0)->where('job_posts.recruiter_id', Auth::id())->get();
        $activePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 1)->where('job_posts.recruiter_id', Auth::id())->get();
        $rePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 2)->where('job_posts.recruiter_id', Auth::id())->get();
        $archivePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 3)->where('job_posts.recruiter_id', Auth::id())->get();
        
        return view('recruiter.post.post', compact('allPost', 'inactivePost', 'activePost', 'rePost', 'archivePost'));
    }
    // Display Company By Searching
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

    /* public function showGetID(Request $request){
        if($request->id != ''){
            $showCompany = DB::table('company_lists as cl')->select('cl.id', 'cl.company_name', 'cl.company_logo', 'cl.company_categories')->where('cl.status', '1')->where('id', $request->id)->get();
            return response()->json(['dispCompany' => $showCompany]);
        }
    } */

    // Posting Job Hiring
    public function createPost(Request $request){

        $post = $request->validate([
            'job_title' => ['string', 'min:2', 'Required'],
            'quill_html' => ['string', 'min:2', 'Required'],
        ]);

        JobPost::create([
            'company_id' => $request->company_id,
            'recruiter_id' => Auth::id(),
            'job_title' => $post['job_title'],
            'description' => $post['quill_html'],
            'status' => $this->status,
            'created_at' => $this->dttm
        ]);

        return redirect()->route('recruiter_post')->with('success', 'Posting Job hiring Successfully');
    }
}
