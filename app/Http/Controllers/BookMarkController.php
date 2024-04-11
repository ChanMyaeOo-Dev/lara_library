<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookMarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::where("user_id", Auth::id())->paginate(10);
        return view('bookmark.index', compact('bookmarks'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required|unique:book_marks,book_id,NULL,id,user_id,' . $request->user_id
        ]);
        $bookmark = new Bookmark();
        $bookmark->user_id = $request->user_id;
        $bookmark->book_id = $request->book_id;
        $bookmark->save();
        return redirect()->back()->with("message", "Successfully added to bookmark.");
    }
    public function show(Bookmark $bookmark)
    {
        //
    }
    public function edit(Bookmark $bookmark)
    {
        //
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        //
    }
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();
        return redirect()->back()->with("message", "Successfully deleted to bookmark.");
    }
}
