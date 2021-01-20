<?php

namespace App\Http\Controllers;

use App\Models\Bible;
use App\Models\Book;
use Illuminate\Http\Request;


class VersionController extends Controller
{
    public function show(Request $request, $version)
    {
        $books = Book::all();

        $request->session()->put('version', $version);

        return view('home', [
            'books' => $books
        ]);
    }
}
