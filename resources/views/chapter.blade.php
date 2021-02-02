@extends('layouts.1')

@section('title', $book[0]->name .' '. $chapter)

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <p class="h2">{{ $book[0]->name }} {{ $chapter }}</p>
                @foreach ($bibles as $bible)
                    <p class="lead"><span style="color: gray" class="badge badge-primary">{{ $bible->number }}</span>{{ $bible->verse }}</p>
                @endforeach
        </div>
        <div class="col-xs-12 col-sm-4">
            <p class="h4">Capítulos</p>
            <p>
                @for($i=1; $i <= $chapters; $i++)
                    <a href="/version/{{ $version }}/book/{{ $book[0]->abreviation }}/{{ $i }}">{{ $i }}</a>
                @endfor
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="row">
                @if($chapter == 1)
                    @if(($book[0]->name == 'Gênesis') && ($chapter == 1))
                        <div class="col-4 lead"></div>
                    @else
                        <div class="col-4 lead">
                            <a href="/version/{{ $version }}/book/{{ $previousbook->abreviation }}/{{ $previousbook ? $previousbook->chapters : $chapter }}">
                                < {{ $previousbook->name }} {{ $previousbook ? $previousbook->chapters : $chapter }}
                            </a>
                        </div>
                    @endif
                @else
                    <div class="col-4 lead">
                        <a href="/version/{{ $version }}/book/{{ $book[0]->abreviation }}/{{ $chapter -1 }}">
                            < {{ $book[0]->name }} {{ $chapter -1 }}
                        </a>
                    </div>
                @endif
                <div class="col-4 text-center lead">
                    <a href="/version/{{ $version }}/book/{{ $book[0]->abreviation }}">Capítulos</a>
                </div>
                @if($chapters <= $chapter)
                    @if(($book[0]->name == 'Apocalipse') && ($chapters = $chapter -1))
                        <div class="col-4 text-end lead"></div>
                    @else
                        <div class="col-4 text-end lead">
                            <a href="/version/{{ $version }}/book/{{ $nextbook->abreviation }}/{{ $nextbook ? 1 : $chapter + 1 }}">
                                {{ $nextbook->name }} {{ $nextbook ? 1 : $chapter + 1 }} >
                            </a>
                        </div>
                    @endif
                @else
                    <div class="col-4 text-end lead">
                        <a href="/version/{{ $version }}/book/{{ $book[0]->abreviation }}/{{ $chapter + 1 }}">
                        {{ $book[0]->name }} {{ $chapter + 1 }} >
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection