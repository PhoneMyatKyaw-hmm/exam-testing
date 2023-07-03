<?php

namespace App\Http\Controllers;

use App\Models\Exam;
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
        $exam = Exam::findOrFail($id);
    }
}