@extends('layouts.1')

@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="row">
      <div class="col-6">
        <h4>Velho Testamento</h4>
        <div class="row">
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 1) && ($book->id < 66)) 
                <span><a href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 66) && ($book->id < 85)) 
                <span><a href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-6">
        <h4>Novo Testamento</h4>
        <div class="row">
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 84) && ($book->id < 99)) 
                <span><a href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
          <div class="col-6">
            @foreach($books as $book)
              @if(($book->id > 98) && ($book->id < 112)) 
                <span><a href="/{{ Session::get('version')}}/{{ $book->abreviation }}">{{ $book->name }}</a></span><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection