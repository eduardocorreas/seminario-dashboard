<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersService;
use App\Models\Service;
use App\Models\User;


class UsersServiceController extends Controller
{
    public function index(){
        $data = ["userServices", "users", "services"];

        $userServices = UsersService::orderBy('service_id')->get();
        $services = Service::all();
        $users = User::where('type_user', 1)->get();

        return view('admin.user_services', compact($data));
    }

    public function store(Request $request){
        try {
            $wasAssigned = UsersService::where('service_id', "=", $request->service_id)
                ->where('user_id', "=", $request->user_id)->exists();

            $service = Service::find($request->service_id);
            $totalParticipants = UsersService::where('service_id', "=", $request->service_id)->count();

            $userOnServices = UsersService::where('user_id', '=', $request->user_id)->pluck('service_id')->toArray();
            $totalExclusive = Service::whereIn('id', $userOnServices)->where('type','=', 'exclusive')->count();

            if($wasAssigned){
                return back()->with('error', 'Você já atribuiu este seminarista a este serviço.');
            }

            if($service->type == "exclusive" && count($userOnServices) > 0){
                return back()->with('error', 'Você está tentando adicionar este seminarista a um serviço exclusivo, mas ele já está atribuído a outro. Remova primeiramente o atual e tente novamente.');
            }

            if($totalExclusive > 0){
                return back()->with('error', 'Este seminarista já foi atribuído a um serviço exclusivo!');
            }

            if($service->max_participants <= $totalParticipants){
                return back()->with('error', 'O número máximo de seminaristas já foi atingido para esta função ou serviço!');
            }

            UsersService::create([
                'user_id' => $request->user_id,
                'service_id' => $request->service_id,
            ]);

            return back();
        } catch (\Throwable $th) {
            return back()->with('error', 'The error message here!');
        }
    }

    public function update(Request $request){

    }

    public function delete($id){
        $service = UsersService::find($id);
        $service->delete();
        return back();
    }
}
