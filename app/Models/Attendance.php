<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // Naziv tablice
    protected $table = 'attendance';

    // Polja koja su dopuštena za masovno punjenje
    protected $fillable = [
        'student_id',
        'activity_id',
        'dateAttendance',
        'notes',
    ];

    // Definiranje odnosa prema učeniku
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Definiranje odnosa prema aktivnosti
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
