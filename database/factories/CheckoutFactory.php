<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => Book::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'checkedout_condition' => $this->faker->numberBetween(1, 5),
            'checkedin_condition' => $this->faker->numberBetween(1, 5),
            'due_date' => $this->faker->dateTime(),
            'checkout_date' => $this->faker->dateTime(''),
            'checkin_date' => $this->faker->dateTime(''),
            'checked_out' => $this->faker->boolean()
        ];
    }
}
