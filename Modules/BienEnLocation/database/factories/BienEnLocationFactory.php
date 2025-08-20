<?php

namespace Modules\BienEnLocation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BienEnLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\BienEnLocation\Models\BienEnLocation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'bien_id' => $this->faker->numberBetween(0, 1000)
        ];
    }
}

