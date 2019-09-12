<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = Product::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('books.show', compact('product'));
    }
}
