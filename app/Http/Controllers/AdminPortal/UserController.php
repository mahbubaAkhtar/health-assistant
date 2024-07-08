<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allAdmins()
    {
//       anyvariable $x =Model::query()->where('is_admin','=',1)->get();
        $admins=User::query()->where('is_admin','=',1)->get();
//        return view('FolderName/blade file',["anykey"=>anyvariable $x]);
        return view('AdminPortal/adminHistory',["admins"=>$admins]);
    }
    public function allUsers()
    {
        $users = User::query()->where('is_admin','=',0)->get();
        return view('AdminPortal/userHistory',["users" => $users]);
    }

    public function showUser ($id)
    {
        $user = User::query()->where('id','=',$id)->first();
        return view('AdminPortal/userProfile',["user" =>$user]);
    }

    public function editUser($id)
    {
        $user = User::query()->where('id','=',$id)->first();
        return view('AdminPortal/userProfileEdit',["user" =>$user]);
    }
    public function updateUser(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required|email',
            'gender' => 'required|',
            'weight' => 'nullable',
            'critical_health_issue' => 'nullable',
        ]);

        $user = User::query()->where('id','=',$id)->first();

        $user->update([
            'name' => $request->name,
            'dob' => $request->dob,
            'email' => $request->email,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'critical_health_issue' => $request->critical_health_issue,
        ]);


//        return redirect("userprofile route");
        return redirect("/admin/users/".$user->id."/profile");
    }
}
