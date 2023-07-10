<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Scores::all();
        return view('examscore', [
            'scores' => $scores
        ]);
    }

    public function show($id)
    {
        $results = Result::where([
            ['exam_id', $id],
            ['user_id', auth()->user()->id],
        ])->get();
        return view('exam.detail', [
            'results' => $results,
        ]);
    }
}
