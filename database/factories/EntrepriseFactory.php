<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mrc_id' => $this->faker->numberBetween(1, 9),
            'nom' => $this->faker->name(),
            'ville' => $this->faker->name(),
            'code_postal' => $this->faker->postcode(),
            'adresse_complete' => $this->faker->address(),
            'telephone' => $this->faker->phoneNumber(),
            'personne_ressource' => $this->faker->name(),
            'logo' => $this->faker->url(),
            'courriel' => $this->faker->email(),
            'description' => $this->faker->text(),
            'typeEntreprise_id' => $this->faker->numberBetween(1, 9),
            'site_web' => $this->faker->url(),
            'typeCommodite_id' => $this->faker->numberBetween(1, 9),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
