<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount= User::query()->count();
        $consultationCount=Consultation::query()->count();
        return view('AdminPortal/dashboard',["userCount"=>$userCount,"consultationCount"=>$consultationCount]);
    }
}
