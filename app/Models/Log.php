<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'name', 'gag_id', 'command', 'before_text', 'before_yomi', 'after_text', 'after_yomi', 'created_at'
    ];

    private static $getCount = 200;

    public static function getPage($page = 1)
    {
        return Log::orderBy('id', 'desc')
            ->offset(($page - 1) * self::$getCount)
            ->limit(self::$getCount)
            ->get();
    }
}
