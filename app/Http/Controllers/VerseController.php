<?php

namespace App\Http\Controllers;

use App\Models\Bible;
use App\Models\Book;

class VerseController extends Controller
{

    public function show($version, $book, $chapter, $verse)
    {
        $book = Book::where('abreviation', $book)->get()[0];
        $verseText = Bible::where('version_abreviation', $version)
            ->where('book_id', $book->id)
            ->where('chapter', $chapter)
            ->where('number', $verse)
            ->get()[0];

        return view('verse', [
            'chapter' => $chapter,
            'version' => $version,
            'book' => $book->name,
            'book_abreviation' => $book->abreviation,
            'verse' => $verse,
            'verseText' => $verseText->verse
        ]);
    }
}