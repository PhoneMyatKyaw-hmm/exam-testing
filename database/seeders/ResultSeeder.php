<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::find(1)->students()->attach(1, [
            'question_id' => 1,
            'answer' => 'A'
        ]);
        Exam::find(1)->students()->attach(1, [
            'question_id' => 2,
            'answer' => 'A'
        ]);
        Exam::find(1)->students()->attach(1, [
            'question_id' => 3,
            'answer' => 'C'
        ]);
        Exam::find(1)->students()->attach(2, [
            'question_id' => 1,
            'answer' => 'A'
        ]);
        Exam::find(1)->students()->attach(2, [
            'question_id' => 2,
            'answer' => 'A'
        ]);
        Exam::find(1)->students()->attach(2, [
            'question_id' => 3,
            'answer' => 'A'
        ]);
        Exam::find(2)->students()->attach(1, [
            'question_id' => 1,
            'answer' => 'A'
        ]);
        Exam::find(2)->students()->attach(1, [
            'question_id' => 2,
            'answer' => 'A'
        ]);
        Exam::find(2)->students()->attach(1, [
            'question_id' => 3,
            'answer' => 'C'
        ]);
        Exam::find(2)->students()->attach(2, [
            'question_id' => 1,
            'answer' => 'A'
        ]);
        Exam::find(2)->students()->attach(2, [
            'question_id' => 2,
            'answer' => 'A'
        ]);
        Exam::find(2)->students()->attach(2, [
            'question_id' => 3,
            'answer' => 'A'
        ]);
    }
}
