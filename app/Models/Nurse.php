<?php

namespace App\Models;

use App\Models\Nurse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nurse extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'image'
    ];
}
