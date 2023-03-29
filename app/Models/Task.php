<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    protected $filliable = [
        'task_name',
        'description',
        'created_at',
        'end_at',
    ];
    
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
