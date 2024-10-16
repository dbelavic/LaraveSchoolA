<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'nameStudent' => $this->faker->firstName,
            'surnameStudent' => $this->faker->lastName,
            'emailStudent' => $this->faker->unique()->safeEmail,
            'classNumber' => $this->faker->randomElement([5, 6, 7, 8]),
            'className' => $this->faker->randomElement(['a', 'b']),
            'school_id' => 1
        ];
    }
}

