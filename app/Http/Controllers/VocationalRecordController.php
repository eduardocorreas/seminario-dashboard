<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VocationalRecord;
use App\Models\User;
use Auth;

class VocationalRecordController extends Controller
{
    public function show(Request $request){
        $data = ['vocational'];

        $vocational = VocationalRecord::where('user_id', '=', $request->id)
        ->leftJoin('users', 'vocational_records.user_id', '=', 'users.id')
        ->select('vocational_records.*', 'users.email as email', 'users.name as name')
        ->first();

        return view('seminarian.vocational-record', compact($data));
    }

    public function update(Request $request){
        $vocational = VocationalRecord::find($request->id);
        $vocational->fill($request->all())->save();

        return back();
    }

    public function myVocationalRecord(){
        $data = ["vocational"];

        $vocational = VocationalRecord::where('user_id', '=', Auth::user()->id)
        ->leftJoin('users', 'vocational_records.user_id', '=', 'users.id')
        ->select('vocational_records.*', 'users.email as email', 'users.name as name')
        ->first();

        return view('seminarian.my-vocational-record', compact($data));
    }
}
