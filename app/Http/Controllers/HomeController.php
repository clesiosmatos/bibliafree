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
        //SitemapGenerator::create('https://bibliafree.com.br')->writeToFile(public_path());
        $books = Book::all();

        $request->session()->put('version', 'acf');

        return view('home', [
            'books' => $books
        ]);
    }
}
