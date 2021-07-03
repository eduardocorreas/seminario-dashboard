<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VocationalRecord;
use App\Models\User;

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
}
