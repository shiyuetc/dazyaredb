<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index() 
    {
        return view('pages.log', ['logs' => Log::getPage(1)]);
    }
}
