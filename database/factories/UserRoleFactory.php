<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Role;
use App\Models\User;

class UserRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => Role::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
