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
            $gags = Gag::search($request->q, $page);
        }
        else 
        {
            $gags = Gag::getPage($page);
        }
        return response()->json($gags);
    }

    public function random()
    {
        return response()->json(Gag::random());
    }
}
