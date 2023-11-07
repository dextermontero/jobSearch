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
        $allPost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at', 'job_posts.updated_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.recruiter_id', Auth::id())->get();
        $inactivePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at', 'job_posts.updated_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 0)->where('job_posts.recruiter_id', Auth::id())->get();
        $activePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at', 'job_posts.updated_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 1)->where('job_posts.recruiter_id', Auth::id())->get();
        $rePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at', 'job_posts.updated_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 2)->where('job_posts.recruiter_id', Auth::id())->get();
        $archivePost = JobPost::select('job_posts.id', 'job_posts.job_title', 'cl.company_logo', 'cl.company_name', 'job_posts.description', 'job_posts.status', 'job_posts.created_at', 'job_posts.updated_at')->join('company_lists as cl', 'cl.id', '=', 'job_posts.company_id')->join('recruiters', 'recruiters.id', '=', 'job_posts.recruiter_id')->where('job_posts.status', 3)->where('job_posts.recruiter_id', Auth::id())->get();
        
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

    // THIS LINE FOR REPOST FUNCTION
    public function postToCheckIdRepost($id){
        $jpExists = JobPost::where('id', $id)->exists(); // Check if ID is exists on table job_posts

        if(!$jpExists){
            return redirect()->route('recruiter_post')->with('info', 'Job Post doesn\'t exists');
        }else{
            return $this->postToRepost($id);
        }
    }

    public function postToRepost($id){
        // Status Code : 0 = inactive; 1 = active; 2 = repost, 3 = archived, 4 = remove
        $status = JobPost::select('status')->where('id', $id)->where('recruiter_id', Auth::id())->get(); // Check if ID is exists on table job_posts

        foreach($status as $key){
            if($key->status === 2){
                return redirect()->route('recruiter_post')->with('info', 'Job Post is already Repost');
            }else{
                JobPost::where('recruiter_id', Auth::id())->where('id', '=', $id)->update(['status' => 2, 'updated_at' => $this->dttm]);
                return redirect()->route('recruiter_post')->with('success', 'Job Post Repost Successfully');
            }
        }
        return redirect()->route('recruiter_post')->with('warning','Ooppss, Something went wrong!');       
    }

    // THIS LINE FOR INACTIVE FUNCTION
    public function postToCheckIdInactive($id){
        $jpExists = JobPost::where('id', $id)->exists(); // Check if ID is exists on table job_posts

        if(!$jpExists){
            return redirect()->route('recruiter_post')->with('info', 'Job Post doesn\'t exists');
        }else{
            return $this->postToInactive($id);
        }
    }

    public function postToInactive($id){
        // Status Code : 0 = inactive; 1 = active; 2 = repost, 3 = archived, 4 = remove
        $status = JobPost::select('status')->where('id', $id)->where('recruiter_id', Auth::id())->get(); // Check if ID is exists on table job_posts

        foreach($status as $key){
            if($key->status === 0){
                return redirect()->route('recruiter_post')->with('info', 'Job Post is already Inactive');
            }elseif($key->status === 3){
                return redirect()->route('recruiter_post')->with('info', 'Job Post is already Archived');
            }else{
                JobPost::where('recruiter_id', Auth::id())->where('id', '=', $id)->update(['status' => 0, 'updated_at' => $this->dttm]);
                return redirect()->route('recruiter_post')->with('success', 'Job Post Inactive Successfully');
            }
        }
        return redirect()->route('recruiter_post')->with('warning','Ooppss, Something went wrong!');       
    }

    // THIS LINE FOR ARCHIVE FUNCTION
    public function postToCheckIdArchive($id){
        $jpExists = JobPost::where('id', $id)->exists(); // Check if ID is exists on table job_posts

        if(!$jpExists){
            return redirect()->route('recruiter_post')->with('info', 'Job Post doesn\'t exists');
        }else{
            return $this->postToArchive($id);
        }
    }

    public function postToArchive($id){
        // Status Code : 0 = inactive; 1 = active; 2 = repost, 3 = archived, 4 = remove
        $status = JobPost::select('status')->where('id', $id)->where('recruiter_id', Auth::id())->get(); // Check if ID is exists on table job_posts

        foreach($status as $key){
            if($key->status === 3){
                return redirect()->route('recruiter_post')->with('info', 'Job Post is already Archived');
            }else{
                JobPost::where('recruiter_id', Auth::id())->where('id', '=', $id)->update(['status' => 3, 'updated_at' => $this->dttm]);
                return redirect()->route('recruiter_post')->with('success', 'Job Post Archived Successfully');
            }
        }
        return redirect()->route('recruiter_post')->with('warning','Ooppss, Something went wrong!');
    }

    // THIS LINE FOR ARCHIVE FUNCTION
    public function postToCheckIdRemove($id){
        $jpExists = JobPost::where('id', $id)->exists(); // Check if ID is exists on table job_posts

        if(!$jpExists){
            return redirect()->route('recruiter_post')->with('info', 'Job Post doesn\'t exists');
        }else{
            return $this->postToRemove($id);
        }
    }

    public function postToRemove($id){
        // Status Code : 0 = inactive; 1 = active; 2 = repost, 3 = archived, 4 = remove
        $status = JobPost::select('status')->where('id', $id)->where('recruiter_id', Auth::id())->get(); // Check if ID is exists on table job_posts

        foreach($status as $key){
            if($key->status !== 4){
                JobPost::where('recruiter_id', Auth::id())->where('id', '=', $id)->delete();
                return redirect()->route('recruiter_post')->with('success', 'Job Post Delete Successfully');
            }
        }
        return redirect()->route('recruiter_post')->with('warning','Ooppss, Something went wrong!');
    }
}
