<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersoneFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->sentence,
            'nomPers' => $this->faker->sentence,
            'prenomPers'=> $this->faker->sentence, 
            'sexe'=> $this->faker->randomElement(['male', 'female']), 
            'dateNaiss'=> $this->faker->date, 
            'adressePers'=> $this->faker->sentence,  
            'emailPers'=> $this->faker->sentence, 
            'mdpPers'=> $this->faker->sentence, 
            'telPers'=> $this->faker->sentence, 
            'professionPers'=> $this->faker->sentence,  
            'paysPers'=> $this->faker->sentence, 
            'villePers'=> $this->faker->sentence, 
            'groupeSanguinPers'=> $this->faker->sentence, 
            'nomPere'=> $this->faker->sentence, 
            'prenomPere'=> $this->faker->sentence, 
            'nomMere'=> $this->faker->sentence, 
            'prenomMere'=> $this->faker->sentence, 
            'estPatient'=> $this->faker->sentence, 
            'estMedecin'=> $this->faker->sentence, 
            'estInfirmier'=> $this->faker->sentence,  
            'estTechnicienLabo'=> $this->faker->sentence,  
            'deleted'=> $this->faker->sentence,  
            'created_at'=> $this->faker->sentence, 
            'updated_at' => $this->faker->sentence  

        ];
    }
}
