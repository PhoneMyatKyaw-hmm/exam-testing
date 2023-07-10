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
        $total_score = 0;
        session(['total_score' => $total_score]);
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
        $correct_answer = Question::findOrFail($question_ids[$index])->correct_answer;
        if ($correct_answer = $request->Options) {
            $total_score = session('total_score');
            $total_score++;
            session(['total_score' => $total_score]);
            // Exam::find($exam_id)->students()->attach(3, [
            //     'question_id' => $question_ids[$index],
            //     'answer' => $request->Options,
            //        'point' => 1,
            // ]);
        } else {
            // Exam::find($exam_id)->students()->attach(3, [
            //     'question_id' => $question_ids[$index],
            //     'answer' => $request->Options,
            //      'point' => 0,
            // ]);
        }

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
        $total_score = session('total_score');
        $exam_id = session('exam_id');
        Scores::create([
            'exam_id' => $exam_id,
            'student_id' => Auth()->user(),
            'total_score' => $total_score,
        ]);
        session()->flush();
        return "success";
    }
}
