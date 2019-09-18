@extends('layouts.app')

@section('content')
@include('shared.errors')

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">
                Create Book
            </h5>

            <div class="card-text">

                <form method="POST" action="{{ route('books.store') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter book name">
                    </div>

                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="number" class="form-control" id="pages" name="pages" value="{{ old('pages') }}" placeholder="Enter book pages">
                    </div>

                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="number" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" placeholder="Enter book isbn">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Enter book price">
                    </div>

                    <div class="form-group">
                        <label for="published_at">Published at</label>
                        <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}" placeholder="Enter book published at">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-outline-primary">Cancel</button>

                </form>

            </div>

        </div>

    </div>
@endsection
