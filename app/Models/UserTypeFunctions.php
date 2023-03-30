<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class UserTypeFunctions extends Model
{
    use HasFactory;
    protected $filliable =[
        'funtion_name',
        'description',
    ];

    public function user_type():MorphToMany
    {
        return $this->morphedByMany(UserType::class,'funct');
    }
}
