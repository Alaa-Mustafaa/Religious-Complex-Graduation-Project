<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'date',
        'phone',
        'number of adults',
        'number of kids',
        'program',
    ];
}
