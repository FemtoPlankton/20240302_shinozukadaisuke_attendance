<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function Attendance()
    {
        $attendances = Attendance::all();
        return view('attendances', ['attendances' => $attendances]);
    }

    public function create(Request $request)
    {
        $attendance = new Attendance();
        $attendance->name = $request->input('name');
        $attendance->time = now();
        $attendance->save();
        return redirect('attendances');
    }
}
