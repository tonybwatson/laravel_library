<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BookGenre::factory(10)->create();
    }
}
