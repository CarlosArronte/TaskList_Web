<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends Model
{
    use HasFactory;
    protected $filliable = [
        'name',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
