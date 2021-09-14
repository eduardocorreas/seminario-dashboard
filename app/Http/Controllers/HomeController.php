<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Complaint;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function panelAdmin()
    {
        $data =["attendances", "complaints"];
        $attendances = Attendance::whereNull('description')->get();
        $complaints = Complaint::where('visualized', "0")->orderBy('created_at','desc')->limit(5)->get();

        return view('admin.home', compact($data));
    }

    public function panelSeminarian()
    {
        $data =["attendances", "complaints"];
        $attendances = Attendance::whereNull('description')->where("user_id", "=", Auth::user()->id)->get();
        $complaints = Complaint::where('visualized', "0")->where("user_id", "=", Auth::user()->id)->orderBy('created_at','desc')->get();

        return view('seminarian.home', compact($data));
    }
}
