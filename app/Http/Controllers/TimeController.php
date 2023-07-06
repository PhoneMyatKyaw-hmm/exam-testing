<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        $startTime = Carbon::now();
        $endTime = session('endTime');
        $remainingTime = $startTime->diffInSeconds($endTime);
        return response()->json(['remainingTime' => $remainingTime]);
    }
}
