<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class back extends Model
{
    use HasFactory;

    protected $table='backs';
    protected $fillable=[
        "user_id","email","name","message"
         
    
       ];
}
