<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;

class ComplaintController extends Controller
{
    public function index(){
        $data = ["complaints", "totalVisualized", "totalAnonymous"];
        $complaints = Complaint::all();
        $totalVisualized = Complaint::where('visualized', '=', '1')->count();
        $totalAnonymous = Complaint::where('type', '=', '1')->count();

        return view('admin.complaints', compact($data));
    }

    public function show(Request $request){
        $data = ["complaint"];
        $complaint = Complaint::find($request->id);

        return view('admin.complaint-detail', compact($data));
    }

    public function store(Request $request){

        try {
            Complaint::create([
                'user_id' => Auth::user()->id,
                'description' => $request->description,
                'type' => $request->type,
                'visualized' => 0,
            ]);

            return back();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function storeVisualized(Request $request){

        try {
            $complaint = Complaint::find($request->id);
            $complaint->visualized = 1;
            $complaint->save();

            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function myComplaints(Request $request){
        $data = ["complaints"];
        $complaints = Complaint::where('user_id', '=', Auth::user()->id)->get();

        return view('seminarian.complaints', compact($data));
    }

    public function delete(Request $request){

        try {
            $complaint = Complaint::find($request->id);
            $complaint->delete();
            return back();
        } catch (\Throwable $th) {
            return back();
        }

    }
}
