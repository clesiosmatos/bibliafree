@extends('layouts.1')

@section('title', $book . ' ' . $chapter . ':' . $verse)

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="lead">{{ $verseText }}</p>
            <p class="h4 text-end">
                <a href="/version/{{ $version }}/book/{{ $book_abreviation }}/{{ $chapter }}?u={{ $verse}}#v{{ $verse }}">
                    {{ $book }} {{ $chapter }}:{{ $verse }}
                </a>
            </p>
            <p>
                <a target="_blank" href="https://api.whatsapp.com/send?text={{ $verseText }}%0A{{ $book }} {{ $chapter }}:{{ $verse }}" class="btn btn-sm btn-success">
                    <i class="fab fa-whatsapp"></i> Whatsapp
                </a>
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://bibliafree.com.br//version/{{ $version }}/book/{{ $book_abreviation }}/{{ $chapter }}/{{ $verse }}" class="btn btn-sm btn-primary">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
            </p>
        </div>
    </div>
@endsection