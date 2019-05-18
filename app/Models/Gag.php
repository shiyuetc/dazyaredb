<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gag extends Model
{
    public $timestamps = false;
    
    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'text', 'yomi',
    ];
}
