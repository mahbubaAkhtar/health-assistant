<?php

namespace App\Http\Controllers;

use App\Models\Prescription;

class PrescriptionController extends Controller
{
    public function show($prescriptionId)
    {
        $prescription = Prescription::query()->find($prescriptionId);

        return view('UserPortal/Prescription/prescription', [
            'prescription' => $prescription
        ]);
    }

    public function latestPrescription()
    {
        $prescription = Prescription::query()
            ->rightJoin('consultations', 'consultations.id', '=', 'prescriptions.consultation_id')
            ->where('consultations.user_id', auth()->id())
            ->orderByDesc('prescriptions.id')
            ->first();

        return view('UserPortal/Prescription/prescription', [
            'prescription' => $prescription
        ]);
    }
}
