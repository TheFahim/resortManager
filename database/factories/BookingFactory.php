<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' =>$this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'start_date' => $this->faker->unique()->dateTimeThisMonth('-12 days'),
            'end_date' => $this->faker->unique()->dateTimeThisMonth('12 days')
        ];
    }
}
