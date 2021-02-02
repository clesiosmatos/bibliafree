<?php

namespace App\Http\Controllers;

use App\Models\Bible;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request, $version = null)
    {
        $books = Book::all();

        if(!$version){
            $version = 'acf';
        }

        $bibles = Bible::where('version_abreviation', $version)
        ->whereBetween('book_id', [85, 111])
        ->inRandomOrder()
        ->first();

        $verseRandom = [
            'verse' => $bibles->verse,
            'chapter' => $bibles->chapter,
            'number' => $bibles->number,
            'book_name' => Book::find($bibles->book_id)->name,
            'book_abreviation' => Book::find($bibles->book_id)->abreviation,
        ];

        return view('home', [
            'books' => $books,
            'version' => $version,
            'verseRandom' => $verseRandom
        ]);
    }
}
