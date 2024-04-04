<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class companysector extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function employees(): HasMany
    {
        return $this->hasMany(employee::class);
    }
    
    public function exitInterviews()
    {
        return $this->hasMany(ExitInterview::class);
    }
    
}
