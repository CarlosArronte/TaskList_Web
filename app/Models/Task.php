<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $filliable = [
        'task_name',
        'description',
        'created_at',
        'end_at',
    ];
    
}
