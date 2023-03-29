<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeFunctions extends Model
{
    use HasFactory;
    protected $filliable =[
        'funtion_name',
        'description',
    ];
}
