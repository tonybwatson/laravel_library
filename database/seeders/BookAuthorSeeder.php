<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BookAuthor::factory(100)->create();
    }
}
