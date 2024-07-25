<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triip extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'date', 'phone', 'number_of_adults', 'number_of_kids', 'program'
    ];
}
