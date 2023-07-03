<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::find(1)->questions()->attach([1]);
        Exam::find(1)->questions()->attach([2]);
        Exam::find(1)->questions()->attach([3]);
        Exam::find(1)->questions()->attach([4]);
        Exam::find(1)->questions()->attach([5]);
        Exam::find(1)->questions()->attach([6]);
    }
}
