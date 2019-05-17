<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gag;

class LogController extends Controller
{
    public function index() 
    {
        $gags = Gag::all();
        return view('log', ['gags' => $gags]);
    }
}
