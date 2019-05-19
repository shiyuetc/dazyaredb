<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index(Request $request) 
    {
        $page = (isset($request->page) && $request->page > 0 && $request->page < 1000) ? $request->page : 1;
        $response = ['page' => $page, 'logs' => Log::getPage($page)];
        return view('pages.log', $response);
    }
}
