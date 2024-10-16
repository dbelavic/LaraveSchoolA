<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['nameSchool'];

    public function users()
    {
        return $this->hasMany(User::class, 'schoolUser');
    }



    public function students()
    {
        return $this->hasMany(Student::class, 'schoolStudent');
    }


}
