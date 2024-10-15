<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {

        $classNumbers = [5, 6, 7, 8];
        $classNames = ['a', 'b'];

        foreach ($classNumbers as $classNumber) {
            foreach ($classNames as $className) {
                Student::factory()->count(5)->create([
                    'classNumber' => $classNumber,
                    'className' => $className,
                    'school_id' => 1,
                ]);
            }
        }
    }
}
