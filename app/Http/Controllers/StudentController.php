<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        // Dohvati sve studente iz baze
        $students = Student::all();

        // Proslijedi podatke o studentima u view
        return view('students.index', compact('students'));
    }


    public function filter(Request $request)
{
    // Dohvati classNumber iz query stringa
    $classNumber = $request->query('classNumber');

    // Ako je classNumber postavljen, filtriraj prema toj vrijednosti
    if ($classNumber) {
        $students = Student::where('classNumber', $classNumber)->get();
    } else {
        $students = Student::all(); // Ako nema filtra, vrati sve studente
    }

    return view('students.index', compact('students'));
}



    public function create()
    {

        $schools = School::all();
        // Proslijedi ih viewu za registraciju
        return view('students.create', compact('schools'));
    }


    public function store (Request $request)
    {


        $request->validate([
            'nameStudent' => ['required', 'string', 'max:255'],
            'surnameStudent' => ['required', 'string', 'max:255'],
            'emailStudent' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Student::class],
            'classNumber' => ['required','integer'],
            'className' => ['required','string', 'max:1'],
            'school_id' => ['required', 'exists:schools,id'],
        ]);

        Student::create([
            'nameStudent' => $request->nameStudent,
            'surnameStudent' => $request->surnameStudent,
            'emailStudent' => $request->emailStudent,
            'classNumber' => $request->classNumber,
            'className' => $request->className,
            'school_id' => $request->school_id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Student has been added successfully.');
    }


}
