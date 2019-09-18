@extends('layouts.app')

@section('content')    
    <h1>
        {{$book->name}} details
    </h1>
    <ul>
        <li><span>pages:</span> {{$book->pages}}</li>
        <li><span>isbn:</span> {{$book->isbn}}</li>
        <li><span>price:</span> {{$book->price}}</li>
        <li><span>published at:</span> {{$book->published_at}}</li>
    </ul>

    <div>
        <a href="{{ route('books.index') }}">Return to index</a>
    </div>
@endsection