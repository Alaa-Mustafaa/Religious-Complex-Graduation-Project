<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orderitem extends Model
{
    use HasFactory;

    protected $table='order_items';
    protected $fillable=[
        'order_id','prod_id','qty','price',
    ];
    public function products(): BelongsTo{
        return $this->belongsTo(product::class,'prod_id','id');
       }
}
