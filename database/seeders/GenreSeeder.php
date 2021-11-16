<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreArr = ["Action and Adventure",
                    "Biographies and Autobiographies",
                    "Classics",
                    "Comic Book or Graphic Novel",
                    "Detective and Mystery",
                    "Fantasy",
                    "Historical Fiction",
                    "Horror",
                    "Literary Fiction",
                    "Romance",
                    "Short Stories",
                    "Suspense and Thrillers"
                    ];
        for ($i = 0; $i < count($genreArr); $i++) {
            $genre_type = new Genre;
            $genre_type->genre_type = $genreArr[$i];
            $genre_type->save();
        }
    }
}
