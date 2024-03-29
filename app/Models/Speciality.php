<?php

namespace App\Models;

use App\Models\Speciality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speciality extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
}
