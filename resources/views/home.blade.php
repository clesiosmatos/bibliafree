@extends('layouts.1')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h5>Versículo do dia</h5>
        <p class="lead">E, quando Silas e Timóteo desceram da Macedônia, foi Paulo impulsionado no espírito, testificando aos judeus que Jesus era o Cristo.</p>
    </div>
</div>

<div class="row">
      <div class="col-xs-12 col-sm-6">
        <h4>Velho Testamento</h4>
        <div class="row">
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 1) && ($book->id < 66)) 
                <span><a href="/version/{{ Session::get('version')}}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 66) && ($book->id < 85)) 
                <span><a href="/version/{{ Session::get('version')}}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
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
                <span><a href="/version/{{ Session::get('version')}}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 98) && ($book->id < 112)) 
                <span><a href="/version/{{ Session::get('version')}}/book/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection