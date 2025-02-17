<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Route che mostra tutti i libri
Route::get('/', function () {
    $books = DB::table('books')->get();
    return view('pages.biblioteca.books', ['books' => $books]);
})->name('home');

// Route che mostra il singolo libro
Route::get('/book/{id}', function ($id) {
    $book = DB::table('books')->find($id);
    return view('pages.biblioteca.single-book', ['book' => $book]);
});

Route::get('/users/create', function () {
    return view('pages.biblioteca.createbook');
})->name('books.create');


Route::post('/books', function(Request $request) {
    DB::table('books')->insert([
        "title"=>$request->title,
        "author_id" => $request->author_id,
        "publish_date"=>$request->publish_date,
    ]);
    return redirect()->route('home');
})->name('book.store');
