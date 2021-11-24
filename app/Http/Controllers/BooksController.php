<?php

namespace App\Http\Controllers;

use App\Http\Resources\BooksResource;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\Genre;
use App\Models\BookGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BooksResource::collection(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
Log::info('create function called');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = \Faker\Factory::create(1);

        $book = Book::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'isbn' => $faker->isbn13(),
            'pages' => $faker->numberBetween(50, 1000),
            'current_condition' => $faker->numberBetween(1,5),
            'publication_year' => $faker->year
        ]);

        $bookgenre = BookGenre::create([
            'genre_id' => Genre::all()->random()->id,
            'book_id' => $book->id,
        ]);

        $author = Author::create([
            'name' => $faker->name
        ]);

        // $bookauthor = BookAuthor::create([
        //     'author_id' => $author->id,
        //     'book_id' => $book->id,
        // ]);

        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BooksResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'publication_year' => $request->input('publication_year')
        ]);

        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response(null, 204);
    }
}
