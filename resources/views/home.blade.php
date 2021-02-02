@extends('layouts.1')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h5>Versículo do dia</h5>
        <p class="lead">{{ $verseRandom['verse'] }}</p>
        <p class="h6 text-end">
            <a href="/version/{{ $version }}/book/{{ $verseRandom['book_abreviation'] }}/{{ $verseRandom['chapter'] }}?u={{ $verseRandom['number'] }}#v{{ $verseRandom['number'] }}">
                {{ $verseRandom['book_name'] }} {{ $verseRandom['chapter'] }}:{{ $verseRandom['number'] }}
            </a>
        </p>
    </div>
</div>

<div class="row">
      <div class="col-xs-12 col-sm-6">
        <h4>Velho Testamento</h4>
        <div class="row">
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 1) && ($book->id < 66)) 
                <span><a href="/version/{{ $version }}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 66) && ($book->id < 85)) 
                <span><a href="/version/{{ $version }}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <h4>Novo Testamento</h4>
        <div class="row">
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 84) && ($book->id < 99)) 
                <span><a href="/version/{{ $version }}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 98) && ($book->id < 112)) 
                <span><a href="/version/{{ $version }}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection