<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CompanyList extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'company_uid',
        'company_logo',
        'company_bg',
        'company_name',
        'company_email',
        'company_description',
        'company_phone',
        'company_founded',
        'company_categories',
        'company_size',
        'company_address',
        'company_website',
        'company_facebook',
        'company_linkedin',
        'company_twitter',
        'company_instagram',
        'action',
        'status',
    ];
}
