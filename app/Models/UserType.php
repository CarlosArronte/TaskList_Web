<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class UserType extends Model
{
    use HasFactory;
    protected $filliable = [
        'type_name',
        'expire_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function functionalities(): MorphToMany
    {
        return $this->morphToMany(UserTypeFunctions::class,'funct');
    }
}
