<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'name' => 'question 1',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'A',
            ],
            [
                'name' => 'question 2',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'B',
            ],
            [
                'name' => 'question 3',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'C',
            ],
            [
                'name' => 'question 4',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'A',
            ],
            [
                'name' => 'question 5',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'C',
            ],
            [
                'name' => 'question 6',
                'optionA' => 'A',
                'optionB' => 'B',
                'optionC' => 'C',
                'correct_answer' => 'A',
            ],
        ];
        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
