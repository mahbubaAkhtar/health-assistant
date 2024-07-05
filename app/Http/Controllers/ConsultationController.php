<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function history()
    {
        $consultations = Consultation::query() ->where('user_id',auth()->user()->id)->get();
//        dd($consultations);

        return view('UserPortal/History/history', ['consultations' => $consultations]);
    }
}
