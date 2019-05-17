<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gag;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $gags = array();
        if(isset($request->q))
        {
            $gags = Gag::where('text', 'like', "%{$request->q}%")->orWhere('yomi', 'like', "%{$request->q}%")->get();
        }
        else 
        {
            $gags = Gag::all();
        }
        
        $data = ['gags' => $gags, 'q' => $request->q];
        return view('home', $data);
    }
}
