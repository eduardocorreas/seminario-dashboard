<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SeminariansController extends Controller
{
    public function index(){
        $data = ['seminarians'];

        $seminarians = User::where('type_user', '=', 1)
        ->leftJoin('vocational_records', 'users.id', '=', 'vocational_records.user_id')
        ->select('users.id as id','users.name as name','users.email as email','vocational_records.phone as phone')
        ->get();

        return view('admin.seminarians', compact($data));
    }

    public function delete(Request $request){

        $seminarian = User::find($request);
        $seminarian->delete();

        return back();
    }
}
