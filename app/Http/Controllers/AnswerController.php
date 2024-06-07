<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Consultation;
use App\Models\Generic;
use App\Models\GenericEligibility;
use App\Models\Prescription;
use App\Models\PrescriptionMedicine;
use App\Models\Symptom;
use App\Models\SymptomQuestion;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function submitAnswer(Request $request, $symptomId)
    {
        $symptom = Symptom::query()->find($symptomId);

        $user = auth()->user();

        // Update user details
        $user->update($request->only(['name', 'age', 'gender', 'weight']));

        // Create consultation
        $consultation = Consultation::query()->create([
            'symptom_id' => $symptomId,
            'user_id' => $user->id
        ]);

        // Create answers
        foreach ($request->questions as $question) {
            foreach ($question as $questionId => $questionAnswer) {
                Answer::query()->create([
                    'consultation_id' => $consultation->id,
                    'question_id' => $questionId,
                    'answer' => $questionAnswer
                ]);
            }
        }

        // Retrieve answers
        $answers = SymptomQuestion::query()->select(['symptom_questions.concern_key', 'answers.answer'])
            ->leftJoin('answers', 'symptom_questions.id', '=', 'answers.question_id')
            ->where('symptom_questions.symptom_id', $symptomId)
            ->where('answers.consultation_id', $consultation->id)
            ->get()
            ->keyBy('concern_key');

        // Filter eligible generic IDs
        $genericIds = GenericEligibility::query()->distinct()->pluck('generic_id');
        $filteredEligibilities = collect();

        foreach ($genericIds as $genericId) {
            $eligibilities = GenericEligibility::query()->where('generic_id', $genericId)->get();

            $isEligible = $eligibilities->every(function ($eligibility) use ($answers) {
                $answer = $answers->get($eligibility->concern_key);

                if (!$answer) {
                    return false;
                }

                if (is_null($eligibility->value)) {
                    return $eligibility->from_value <= $answer['answer'] && $eligibility->to_value >= $answer['answer'];
                } else {
                    return $eligibility->value == $answer['answer'];
                }
            });

            if ($isEligible) {
                $filteredEligibilities = $filteredEligibilities->merge($eligibilities);
            }
        }

        // Retrieve generics
        $generics = Generic::query()
            ->whereIn('id', $filteredEligibilities->pluck('generic_id'))
            ->with(['genericDose'])
            ->get();

        $prescription = Prescription::query()->create([
            'patient_name' => $user->name,
            'patient_age' => $user->age,
            'patient_gender' => $user->gender,
            'consultation_id' => $consultation->id,
            'symptom' => $symptom->name,
            'advice' => "<ul style='font-size: 12px'>
                            <li>বিশ্রাম  নিবেন </li>
                            <li>বেশি বেশি পানি খাবেন</li>
                            <li>তিন দিনের মধ্যেই সুস্থ না হলে ডাক্তারের পরামর্শ নিন</li>
                         </ul>",
        ]);

        foreach ($generics as $generic) {
            PrescriptionMedicine::query()->create([
                'prescription_id' => $prescription->id,
                'generic_id' => $generic->id,
                'generic_dose_id' => $generic->genericDose->id
            ]);
        }

       return redirect()->route('prescription.show', $prescription->id);
    }
}
