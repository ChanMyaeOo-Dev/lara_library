<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::latest()->get();
        return view("admin.book.index", compact("books"));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.book.create', compact('categories'));
    }

    public function store(StoreBookRequest $request)
    {
        $book = new Book();

        if ($request->hasFile('book_image')) {
            $newName = uniqid() . '_book_image.' . $request->file("book_image")->getClientOriginalExtension();
            $request->file("book_image")->storeAs("public", $newName);
            $book->book_image = $newName;
        } else {
            $book->book_image = "default_book_image.jpg";
        }

        $book->title = $request->title;
        $book->slug = Str::slug($request->title);

        $book->description = $request->description;
        $book->excerpt = Str::excerpt($request->description);

        $book->author = $request->author;
        $book->category_id = $request->category;
        $book->qty = $request->qty;
        $book->save();
        return redirect()->route('books.index')->with("message", "New Book has been successfully added.");
    }

    public function show(Book $book)
    {
        return view("admin.book.show", compact("book"));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.book.edit', compact('categories', 'book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->slug = Str::slug($request->title);
        $book->description = $request->description;
        $book->excerpt = Str::excerpt($request->description);
        $book->author = $request->author;
        $book->category_id = $request->category;
        $book->qty = $request->qty;
        $book->update();
        return redirect()->route('books.index')->with("message", "Updated successfully.");
    }

    public function destroy(Book $book)
    {
        if ($book->book_image != "default_book_image.jpg") {
            Storage::delete("public/" . $book->book_image);
        }
        $book->delete();
        return redirect()->route('books.index')->with("message", "Deleted successfully.");
    }
}
