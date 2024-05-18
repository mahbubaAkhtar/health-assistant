<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function show ($id)
    {
        $symptom = Symptom::query()->findOrFail($id);
        return view('Symptoms/show',['symptom' => $symptom]);
    }
}
