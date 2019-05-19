<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gag;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $page = (isset($request->page) && $request->page > 0 && $request->page < 1000) ? $request->page : 1;
        if(isset($request->q))
        {
            $gag_total_count = Gag::where('text', 'like', "%{$request->q}%")
            ->orWhere('yomi', 'like', "%{$request->q}%")
            ->count();

            if($gag_total_count > 0) 
            {
                $gags = Gag::search($request->q, $page);
                $response['alert'] = ['type' => 'primary', 'message' => "『{$request->q}』の検索結果：{$gag_total_count}件のだじゃれが該当しました"];
            }
            else
            {
                $response['alert'] = ['type' => 'danger', 'message' => "『{$request->q}』の検索結果：該当するだじゃれが存在しませんでした"];
            }
        }
        else 
        {
            $gag_total_count = Gag::count();
            $gags = Gag::getPage($page);
        }
        
        $response['gag_total_count'] = isset($gag_total_count) ? $gag_total_count : 0;
        $response['gags'] = isset($gags) ? $gags : array();
        $response['q'] = $request->q;
        $response['page'] = $page;
        return view('pages.home', $response);
    }
}
