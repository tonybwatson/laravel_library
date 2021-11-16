<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'isbn' => $this->faker->isbn13,
            'pages' => $this->faker->numberBetween(50, 1000),
            'current_condition' => $this->faker->numberBetween(1, 5),
            'publication_year' => (string) $this->faker->year
        ];
    }
}
