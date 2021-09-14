<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;
use \App\Models\User;

class AttendanceController extends Controller
{
    public function index(Request $request){
        $data=['attendances', 'seminarian'];
        $attendances = Attendance::where('user_id','=', $request->user_id)->orderBy('date')->orderBy('hour')->get();
        $seminarian = User::find($request->user_id);

        return view('admin.attendances-seminarian', compact($data));

    }

    public function store(Request $request)
    {
        if(isset($request->date)){
            Attendance::create([
                'user_id' => $request->user_id,
                'description' => "",
                'date' => $request->date,
                'hour' => $request->hour,
            ]);
            return back();
        }else{
            try {
                $attendance = Attendance::create([
                    'user_id' => $request->user_id,
                    'description' => "",
                    'date' => Carbon::now()->format('Y-m-d'),
                    'hour' => Carbon::now()->format('H:i'),
                ]);

                return redirect("/attendances/".$attendance->id);
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function show(Request $request)
    {
        $data = ["attendance", "seminarian"];
        $attendance = Attendance::find($request->id);
        $seminarian = User::find($attendance->user_id);
        return view('admin.attendance-detail', compact($data));
    }

    public function update(Request $request)
    {
        $attendance = Attendance::find($request->id);
        $attendance->description = $request->description;
        $attendance->save();

        return redirect("/attendances/".$attendance->user_id);
    }

    public function delete($id){
        $attendance = Attendance::find($id);
        $attendance->delete();

        return back();
    }
}
