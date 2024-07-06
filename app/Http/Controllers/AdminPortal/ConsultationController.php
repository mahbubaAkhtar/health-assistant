<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function consultationHistory()
    {

        $consultationHistory = Consultation::query()->get();
        return view('AdminPortal/userConsultationHistory',["consultationHistory"=>$consultationHistory]);
    }

    public function showPrescription($consultationId)
    {
        $consultation=Consultation::query()->where('id','=',$consultationId)->first();
        $prescription=$consultation->prescription;
        return view('AdminPortal/Prescription',["prescription"=>$prescription]);
    }
}
