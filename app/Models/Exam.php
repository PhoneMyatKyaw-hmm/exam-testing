<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exams';

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'exam_question');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'results');
    }
}
