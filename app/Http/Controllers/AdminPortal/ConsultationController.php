<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function consultations()
    {

        $consultationHistory = Consultation::query()->get();
        return view('AdminPortal/userConsultationHistory',["consultationHistory"=>$consultationHistory]);
    }
}
