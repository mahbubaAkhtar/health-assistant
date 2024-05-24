<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class AnswerController extends Controller
{
    public function submitAnswer(Request $request)
    {
        foreach ($request->questions as $question) {
            foreach ($question as $questionId => $questionAnswer) {
                Answer::query()->create([
                    'question_id' => $questionId,
                    'answer' => $questionAnswer
                ]);
            }
        }

        return redirect('prescription');
    }
}
