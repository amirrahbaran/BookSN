@extends('layouts.app')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Books</h1>
    </div>

    <div class="row">
        @foreach($books as $book)
            <div class="col-sm-6 col-lg-4">
                <div class="card-deck mb-1 text-center">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">
                                <a href="books/{{ $book->id }}">
                                    {{ $book->name }}
                                </a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                ${{ $book->price }}
                        </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Pages: {{ $book->pages }}</li>
                                <li>ISBN: {{ $book->isbn }}</li>
                                <li>Published at: {{ $book->published_at }}</li>
                            </ul>
                            <a class="btn btn-lg btn-block btn-primary" href="books/{{$book->id}}">
                                See Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
