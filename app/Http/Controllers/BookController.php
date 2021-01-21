<?php

namespace App\Http\Controllers;

use App\Models\Bible;
use App\Models\Book;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;


class BookController extends Controller
{
    public function showChapters($version, $book)
    {
        $bookAux = Book::where('abreviation', $book)->get();

        return view('chapters', [
            'version' => $version,
            'book' => $bookAux
        ]);
    }

    public function showChapter($version, $book, $chapter = null)
    {
        $book = Book::where('abreviation', $book)->get();
        $bibles = Bible::where('version_abreviation', $version)
        ->where('book_id', $book[0]->id)
        ->where('chapter', $chapter)
        ->orderBy('number', 'ASC')
        ->get();

        $nextbook = Book::find($book[0]->id + 1);
        $previousbook = Book::find($book[0]->id - 1);

        return view('chapter', [
            'book' => $book,
            'chapter' => $chapter,
            'bibles' => $bibles,
            'chapters' => $book[0]->chapters,
            'nextbook' => $nextbook,
            'previousbook' => $previousbook
        ]);
    }

    public function crawler($version, $book__, $chapters__)
    {
        $client = HttpClient::create();

        $bookAux = Book::all();

        foreach($bookAux as $book) {
            for($i=1; $i <= $book->chapters; $i++) {
                $request = $client->request('GET', "https://www.bibliaonline.com.br/$version/$book->abreviation/$i");
                $content = $request->getContent();
        
                $crawler = new Crawler($content);
                $verses = $crawler->filter('div.jss40 > p');
        
                foreach ($verses as $verse) {
                    $bible = new Bible();
                    $bible->insert(
                        [
                            'chapter' => $i,
                            'verse' => $verse->textContent,
                            'number' => preg_replace('/[^0-9]/', '', $verse->textContent),
                            'version_abreviation' => $version,
                            'version_name' => 'Almeida Corrigida Fiel',
                            'book_id' => $book->id
                        ]
                    );
                }
            }
        }
    }
}
