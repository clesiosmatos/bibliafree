<?php

namespace App\Http\Controllers;

use App\Models\Bible;
use App\Models\Book;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $books = Book::all();
        //$bibles = Bible::where('version', )

        $request->session()->put('version', 'acf');

        return view('home', [
            'books' => $books
        ]);
    }
}
