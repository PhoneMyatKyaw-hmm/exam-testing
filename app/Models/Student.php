<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    public function exams(): BelongsToMany
    {
        return $this->belongsToMany(Exam::class, 'results');
    }

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Exam::class, 'results');
    }
}
