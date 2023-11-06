<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller
{
    private $dttm;
    private $status;

    public function __construct()
    {
        $this->dttm = now();
        $this->status = '1';
    }
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
