<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gag;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $gags = array();
        $page = (isset($request->page) && $request->page > 0 && $request->page < 1000) ? $request->page : 1;
        if(isset($request->q))
        {
            $gags = Gag::where('text', 'like', "%{$request->q}%")->orWhere('yomi', 'like', "%{$request->q}%")->offset(($page - 1) * 200)->limit(200)->get();
        }
        else 
        {
            $gags = Gag::offset(($page - 1) * 200)->limit(200)->get();
        }
        return response()->json($gags);
    }
}
