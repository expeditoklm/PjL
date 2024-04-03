<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NotePatient>
 */
class NotePatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' =>$this->faker->randomNumber(),
            'note' =>$this->faker->text(),
            'deleted' =>$this->faker->randomNumber(), 
        ];
    }
}
