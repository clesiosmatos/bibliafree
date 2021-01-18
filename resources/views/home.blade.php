@extends('layouts.1')

@section('title', 'Home')

@section('content')
<div class="row">
      <div class="col-6 col-md">
        <h5>Velho Testamento</h5>
        <ul class="list-unstyled text-small">
          @foreach($books as $book)
            @if(($book->id > 1) && ($book->id < 66))
            <li><a class="link-primary" href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></li>
            @endif
          @endforeach
        </ul>
      </div>
      <div class="col-6 col-md">
        <ul class="list-unstyled text-small">
          @foreach($books as $book)
            @if(($book->id > 66) && ($book->id < 85))
              <li><a class="link-primary" href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></li>
            @endif
          @endforeach
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Novo Testamento</h5>
        <ul class="list-unstyled text-small">
          @foreach($books as $book)
              @if(($book->id > 84) && ($book->id < 99))
                <li><a class="link-primary" href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></li>
              @endif
          @endforeach
        </ul>
      </div>
      <div class="col-6 col-md">
        <ul class="list-unstyled text-small">
          @foreach($books as $book)
                @if(($book->id > 98) && ($book->id < 112))
                  <li><a class="link-primary" href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></li>
                @endif
          @endforeach
        </ul>
      </div>
      
    </div>
@endsection