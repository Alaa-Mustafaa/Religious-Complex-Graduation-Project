<?php

namespace App\Models;
use App\Models\orderitem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
        'user_id','fname','lname','email','phone','address',
        'city','country','pincode','status','message',
        'tracking_no','total-price',
    ];

    public function orderitems(){
        return $this->hasMany(orderitem::class);
    }

  
}
