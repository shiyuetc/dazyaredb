<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GagRequest;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Gag;
use App\Models\Log;

class GagController extends Controller
{
    public function show($id) 
    {
        $gag = Gag::find($id);
        if(!is_null($gag)) 
        {
            return view('pages.gag', ['gag' => $gag]);
        }
        else 
        {
            return view('errors.404');
        }
    }

    public function create(GagRequest $request) 
    {
        $gag_id = time();
        $result = DB::transaction(function () use ($gag_id, $request) {
            Log::commandCreate(Auth::user()->id, $gag_id, $request->text, $request->yomi);
            return Gag::insert(['id' => $gag_id, 'text' => $request->text, 'yomi' => $request->yomi]);
        });
        
        if(!is_null($result)) 
        {
            $response['alert'] = ['type' => 'success', 'message' => "{$request->text}({$request->yomi})を追加しました。"];
        }
        else
        {
            $response['alert'] = ['type' => 'danger', 'message' => '新規登録に失敗しました。'];
        }
        return view("pages.admin.register", $response);
    }

    public function update($id, GagRequest $request) 
    {
        $gag = Gag::find($id);
        if(is_null($gag)) 
        {
            return redirect()->route('home');
        }

        $response['gag'] = $gag;
        if($gag->text == $request->text && $gag->yomi == $request->yomi)
        {
            $response['alert'] = ['type' => 'danger', 'message' => '更新前と更新後の値が同じです。'];
        }
        else
        {
            $oldText = $gag->text;
            $oldYomi = $gag->yomi;
            $result = DB::transaction(function () use ($gag, $request) {
                Log::commandUpdate(Auth::user()->id, $gag->id, $request->text, $request->yomi, $gag->text, $gag->yomi);
                return $gag->update(['text' => $request->text, 'yomi' => $request->yomi ]);
            });

            if($result) 
            {
                $response['alert'] = ['type' => 'success', 'message' => "{$oldText}({$oldYomi})を{$request->text}({$request->yomi})に更新しました。"];
            }
            else
            {
                $response['alert'] = ['type' => 'danger', 'message' => '更新に失敗しました。'];
            }
        }
        return view("pages.gag", $response);
    }

    public function destroy($id) 
    {
        $result = DB::transaction(function () use ($id) {
            $gag = Gag::find($id);
            if(!is_null($gag)) 
            {
                Log::commandDestroy(Auth::user()->id, $gag->id, $gag->text, $gag->yomi);
                return $gag->delete();
            }
            return false;
        });
        
        return redirect()->route('home');
    }
}
