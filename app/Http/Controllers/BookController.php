<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\StoreBookPost;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookPost $request)
    {
        $request->validated();
        $book = Book::create($request->except('_token'));
        return redirect()->route('books.index');
    }
}
