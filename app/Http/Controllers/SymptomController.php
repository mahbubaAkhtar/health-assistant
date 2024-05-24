<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Models\SymptomQuestion;

class SymptomController extends Controller
{
    public function show($id)
    {
        $symptom = Symptom::query()->findOrFail($id);
        return view('Symptoms/description', ['symptom' => $symptom]);
    }

    public function questionsBySymptomId($symptomId)
    {
        $symptom = Symptom::query()->findOrFail($symptomId);
        $questions = SymptomQuestion::query()
            ->where('symptom_id', '=', $symptomId)
            ->where('is_active', '=', true)
            ->get();

        $user = auth()->user();

        return view('Symptoms/questions', [
            'symptom' => $symptom,
            'questions' => $questions,
            'user' => $user
        ]);
    }
}
