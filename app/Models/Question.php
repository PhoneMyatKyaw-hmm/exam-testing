<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;

    public function exams(): BelongsToMany
    {
        return $this->belongsToMany(Exam::class, 'exam_question');
    }
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'results');
    }
}
