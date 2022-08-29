<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'image' => $this->faker->imageUrl(640,480),
            'price' =>$this->faker->randomFloat(2),
            'description' => $this->faker->sentence(),
            'is_available' => $this->faker->boolean()
        ];
    }
}
