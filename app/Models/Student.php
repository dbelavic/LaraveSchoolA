<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Naziv tablice
    protected $table = 'students';

    // Polja koja su dopuštena za masovno punjenje
    protected $fillable = [
        'nameStudent',
        'surnameStudent',
        'emailStudent',
        'classNumber',
        'className',
        'school_id',
    ];

    // Definiranje odnosa prema školi
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    // Definiranje odnosa prema prisustvu
    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
}
