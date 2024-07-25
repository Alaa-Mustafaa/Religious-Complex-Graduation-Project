<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable=[
     "title","reason_of_name","description","history","image1","image2","image3","image4","added_at"

    ];
}
