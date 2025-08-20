<?php

namespace Modules\Bien\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Bien\Models\Bien::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(6, true),
            'description' => $this->faker->sentences(4, true),
            'surface' => $this->faker->numberBetween(50, 200),
            'pieces' => $this->faker->numberBetween(50, 200),
            'chambres' => $this->faker->numberBetween(50, 200),
            'etage' => $this->faker->numberBetween(0, 10),
            'prix' => $this->faker->numberBetween(25000, 2000000),
            'ville' => $this->faker->city,
            'adresse' => $this->faker->address,
            'vendre' => $this->faker->boolean(),
            'disponible' => $this->faker->boolean(100)
        ];
    }
}

