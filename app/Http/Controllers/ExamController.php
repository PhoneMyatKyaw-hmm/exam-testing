<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('testing', ['exams' => $exams]);
    }

    public function show($id)
    {
        $endTime = Carbon::now()->addSeconds(30);
        session(['endTime' => $endTime]);

        $question_ids = Exam::findOrFail($id)->questions()->pluck('id')->toArray();
        $index = 0;
        session(['exam_id' => $id]);
        session(['question_ids' => $question_ids]);
        session(['index' => $index]);
        session(['number_of_questions' => count($question_ids)]);
        $question = Question::findOrFail($question_ids[$index]);
        return view('examform', [
            'question' => $question,
        ]);
    }

    public function store(Request $request)
    {
        $exam_id = session('exam_id');
        $question_ids = session('question_ids');
        $index = session('index');
        // Exam::find($exam_id)->students()->attach(3, [
        //     'question_id' => $question_ids[$index],
        //     'answer' => $request->Options
        // ]);
        $index++;
        session()->forget('index');
        session(['index' => $index]);
        $question = Question::findOrFail($question_ids[$index]);
        return view('examform', [
            'question' => $question,
            'index' => $index,
        ]);
    }

    public function finish_exam()
    {
        session()->flush();
        return "success";
    }
}
