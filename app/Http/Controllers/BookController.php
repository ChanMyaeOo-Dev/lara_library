<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view("admin.book.index", compact("books"));
    }


    public function create()
    {
        //
    }

    public function store(StoreBookRequest $request)
    {
        //
    }

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}
