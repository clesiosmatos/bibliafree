@extends('layouts.1')

@section('title', $book . ' ' . $chapter . ':' . $verse)

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="lead">{{ $verseText }}</p>
            <p class="h4 text-end">
                <a href="/version/{{ Session::get('version')}}/book/{{ $book_abreviation }}/{{ $chapter }}">
                    {{ $book }} {{ $chapter }}:{{ $verse }}
                </a>
            </p>
        </div>
    </div>
@endsection