<?php

namespace App\Http\Controllers;

use App\Models\HealthTip;
use App\Models\Symptom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tips = HealthTip::all();
        $symptoms = Symptom::query()->where("is_active",true)->get();

        return view('Home/home', [
            'symptoms' => $symptoms,
            'tips'=>$tips
        ]);
    }
}
