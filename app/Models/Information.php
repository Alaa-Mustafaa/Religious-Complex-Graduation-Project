<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table='informations';
    protected $fillable = [
        'name',
        'desc1',
        'desc2',
        'desc3',
        'desc4',
        'desc5',
        'desc6',
        'desc7',
        'desc8',
        'desc9',
        'desc10',
        'calledreason',
        'image',
        'imagee',
        'imageee',
    ];
}

