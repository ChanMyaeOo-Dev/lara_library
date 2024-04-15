<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookApiController extends Controller
{

    public function index()
    {
        $books = Book::latest()->get();
        return response()->json($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return response()->json($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        if ($book == null) {
            return response()->json(["message" => "Book not found."], 404);
        }
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'author' => 'nullable',
            'category' => 'nullable',
            'qty' => 'nullable|integer|min:1'
        ]);

        $book = Book::find($id);
        if ($book == null) {
            return response()->json(["message" => "Book not found."], 404);
        }
        $old_book_image = $book->book_image;
        if ($request->hasFile('book_image')) {
            if ($book->book_image != "default_book_image.jpg") {
                Storage::delete("public/" . $book->book_image);
            }
            $newName = uniqid() . '_book_image.' . $request->file("book_image")->getClientOriginalExtension();
            $request->file("book_image")->storeAs("public", $newName);
            $book->book_image = $newName;
        } else {
            $book->book_image = $old_book_image;
        }

        if ($request->has("title")) {
            $book->title = $request->title;
            $book->slug = Str::slug($request->title);
        }
        if ($request->has("description")) {
            $book->description = $request->description;
            $book->excerpt = Str::excerpt($request->description);
        }
        if ($request->has("author")) {
            $book->author = $request->author;
        }
        if ($request->has("category")) {
            $book->category_id = $request->category;
        }
        if ($request->has("qty")) {
            $book->qty = $request->qty;
        }

        $book->update();
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        if ($book == null) {
            return response()->json(["message" => "Book not found."], 404);
        }
        $book->delete();
        return response()->json(["message" => "Book is deleted."], 200);
    }
}
