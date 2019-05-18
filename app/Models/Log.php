<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'name', 'gag_id', 'command', 'before_text', 'before_yomi', 'after_text', 'after_yomi', 'created_at'
    ];
}
