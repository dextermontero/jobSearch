<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Companies extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'companies';
    
    protected $fillable = [
        'company_id',
        'recruiter_id',
        'status',
    ];
}
