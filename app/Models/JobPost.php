<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JobPost extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'company_id',
        'recruiter_id',
        'job_title',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];
}
