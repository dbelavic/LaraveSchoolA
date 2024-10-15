<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    // Naziv tablice
    protected $table = 'activities';

    // Polja koja su dopuštena za masovno punjenje
    protected $fillable = [
        'nameActivity',
        'user_id',
    ];

    // Definiranje odnosa prema korisniku (učitelju)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definiranje odnosa prema prisustvu
    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'activity_id');
    }
}
