<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount= User::query()->where('is_admin','=',0)->count();
        $consultationCount=Consultation::query()->count();
        $adminCount=User::query()->where('is_admin','=',1)->count();

        return view('AdminPortal/dashboard',[
            "userCount"=>$userCount,
            "consultationCount"=>$consultationCount,
            "adminCount"=>$adminCount,
        ]);
    }
}
