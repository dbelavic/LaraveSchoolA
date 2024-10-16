<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Attendance;
use App\Models\Student;


class AttendanceController extends Controller
{
    // Prikaz forme za stvaranje nove liste prisutnosti
    public function create()
    {
            $students = Student::all();
            $activities = Activity::all();
            return view('attendance.create', compact('students', 'activities'));
    }

    // Spremanje nove aktivnosti u bazu
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'activity_id' => 'required|exists:activities,id',
            'dateAttendance' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        Attendance::create([
            'student_id' => $request->student_id,
            'activity_id' => $request->activity_id,
            'dateAttendance' => $request->dateAttendance,
            'notes' => $request->notes,
        ]);

        return redirect()->route('attendance.index')->with('success', 'Prisutnost je uspješno zabilježena!');
    }

    // Prikaz svih aktivnosti
    public function index()
    {
        $attendance = Attendance::with('student', 'activity')->get();
        return view('attendance.index', compact('attendance'));
    }
}

