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

    public static function commandCreate($user_id, $gag_id, $text, $yomi)
    {
        return Log::insert([
            'user_id' => $user_id,
            'gag_id' => $gag_id,
            'command' => 'create', 
            'after_text' => $text, 
            'after_yomi' => $yomi
        ]);
    }

    public static function commandUpdate($user_id, $gag_id, $after_text, $after_yomi, $before_text, $before_yomi)
    {
        return Log::insert([
            'user_id' => $user_id,
            'gag_id' => $gag_id,
            'command' => 'update', 
            'after_text' => $after_text, 
            'after_yomi' => $after_yomi,
            'before_text' => $before_text, 
            'before_yomi' => $before_yomi
        ]);
    }

    public static function commandDestroy($user_id, $gag_id, $text, $yomi)
    {
        return Log::insert([
            'user_id' => $user_id,
            'gag_id' => $gag_id,
            'command' => 'destroy', 
            'after_text' => $text, 
            'after_yomi' => $yomi 
        ]);
    }
}
