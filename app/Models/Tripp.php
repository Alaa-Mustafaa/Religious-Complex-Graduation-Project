<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripp extends Model
{
    use HasFactory;

    protected $table='tripps';
    protected $fillable = [
        'name',
        'email',
        'date',
        'phone',
        'number_of_adults',
        'number_of_kids',
        'program',
    ];
}
