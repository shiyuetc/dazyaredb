<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gag;

class GagController extends Controller
{
    public function show($id) 
    {
        $gag = Gag::find($id);
        if(is_null($gag)) 
        {
            return view('errors.404');
        }
        else 
        {
            return view('gag', ['gag' => $gag]);
        }
    }

    public function create() 
    {

    }

    public function update($id) 
    {

    }

    public function delete($id) 
    {

    }
}
