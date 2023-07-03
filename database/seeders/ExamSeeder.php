<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            [
                'name' => 'Exam 1'
            ],
            [
                'name' => 'Exam 2'
            ],
            [
                'name' => 'Exam 3'
            ],
        ];
        foreach ($exams as $exam) {
            Exam::create($exam);
        }
    }
}
