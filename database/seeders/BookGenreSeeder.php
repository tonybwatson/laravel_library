<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookGenre;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookGenre::factory(100)->create();
    }
}
