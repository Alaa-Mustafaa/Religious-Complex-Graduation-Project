<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $table='carts';
    protected $fillable=[
        "user_id","prod_id","prod_qty",
         
    
       ];

       public function products(){
        return $this->belongsTo(product::class,'prod_id','id');
       }

      
 
}
