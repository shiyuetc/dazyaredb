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

    private static $getCount = 200;

    public static function getPage($page = 1)
    {
        return Gag::orderBy('yomi', 'asc')
            ->offset(($page - 1) * self::$getCount)
            ->limit(self::$getCount)
            ->get();
    }

    public static function search($q, $page = 1)
    {
        return Gag::where('text', 'like', "%{$q}%")
            ->orWhere('yomi', 'like', "%{$q}%")
            ->orderBy('yomi', 'asc')
            ->offset(($page - 1) * self::$getCount)
            ->limit(self::$getCount)
            ->get();
    }

    public static function random()
    {
        return Gag::inRandomOrder()->first();
    }
}
