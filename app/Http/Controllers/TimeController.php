<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        $startTime = Carbon::now();
        $endTime = session('endTime'); // Set the end time as the current time plus 2 hours
        $remainingTime = $startTime->diffInSeconds($endTime);
        //$remainingTime = $endTime->diffInSeconds();
        return response()->json(['remainingTime' => $remainingTime]);
    }
}
