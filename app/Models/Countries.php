<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Countries extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'code'
    ];
}
