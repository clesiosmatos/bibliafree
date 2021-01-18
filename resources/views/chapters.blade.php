@extends('layouts.1')

@section('title', 'Capítulo')

@section('content')
    <div class="row">
        <div class="col-8">
            <p class="h2">{{ $book[0]->name }} {{ $chapter }}</p>
                @foreach ($bibles as $bible)
                    <p>{{ $bible->verse }}</p>
                @endforeach
        </div>
        <div class="col-4">
            <p class="h4">Capítulos</p>
            <p>
                @for($i=1; $i <= $chapters; $i++)
                    <a href="/acf/{{ $book[0]->abreviation }}/{{ $i }}">{{ $i }}</a>
                @endfor
            </p>
        </div>
    </div>
@endsection