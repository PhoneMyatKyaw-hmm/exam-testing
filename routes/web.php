<?php

use Ramsey\Uuid\Type\Time;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\TestingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', [ExamController::class, 'index']);

Route::get('exams/{id}', [ExamController::class, 'show']);

Route::post('exams', [ExamController::class, 'store'])->name('answer_store');

Route::get('/timer', [TimeController::class, 'index'])->name('timer.index');

Route::get('testing', [ExamController::class, 'submit'])->name('submit');
