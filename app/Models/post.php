<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded =[];
    use HasFactory;
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
