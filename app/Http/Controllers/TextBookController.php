<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTextBookRequest;
use App\Http\Requests\UpdateTextBookRequest;
use App\Models\Book;
use App\Models\BookMark;
use App\Models\TextBook;
use Illuminate\Support\Facades\Auth;

class TextBookController extends Controller
{
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTextBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTextBookRequest $request)
    {
    }

    public function show($slug)
    {
        $book = Book::where('slug', $slug)->first();
        if (Auth::user() == null) {
            return view('show', compact("book"));
        }
        $user = Auth::user();
        $bookmark = $user->bookmarks()->where('book_id', $book->id)->first();
        $wishlist = $user->wishlists()->where('book_id', $book->id)->first();
        return view('show', compact("book", "bookmark", "wishlist"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TextBook  $textBook
     * @return \Illuminate\Http\Response
     */
    public function edit(TextBook $textBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTextBookRequest  $request
     * @param  \App\Models\TextBook  $textBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTextBookRequest $request, TextBook $textBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TextBook  $textBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextBook $textBook)
    {
        //
    }
}
