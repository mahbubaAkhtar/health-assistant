<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Models\SymptomQuestion;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function show ($id)
    {
        $symptom = Symptom::query()->findOrFail($id);
        return view('Symptoms/description',['symptom' => $symptom]);
    }

    public function questionsBySymptomId($symptomId)
    {
        $symptom = Symptom::query()->findOrFail($symptomId);
        $questionsrrrr = SymptomQuestion::query()
            ->where('symptom_id', '=', $symptomId)
            ->where('is_active', '=',true)
            ->get();

        return view('Symptoms/questions',[
            'symptom_name' => $symptom->name,
            'questions' => $questionsrrrr
        ]);
    }
}
