<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SeminariansController extends Controller
{
    public function index(){
        $data = ['seminarians'];

        $seminarians = User::where('type_user', '=', 1)->get();

        return view('seminarian.home', compact($data));
    }
}
