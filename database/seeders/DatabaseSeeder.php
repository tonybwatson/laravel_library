<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(BookAuthorSeeder::class);
        $this->call(ConditionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CheckoutSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(BookGenreSeeder::class);
    }
}
