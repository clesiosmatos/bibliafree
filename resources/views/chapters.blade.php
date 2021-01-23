@extends('layouts.1')

@section('title', $book[0]->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>{{ $book[0]->name }}</h2>
            <ul>
                @for($i=1; $i <= $book[0]->chapters; $i++)
                    <li class="d-inline p-3 fs-1"><a href="/{{ Session::get('version')}}/{{ $book[0]->abreviation }}/{{ $i }}">{{ $i }}</a></li>
                @endfor
            </ul>
        </div>
    </div>
@endsection