<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->take(10)->get();
        return view('home', compact("books"));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $books = Book::where('title', 'like', "%$query%")->get();

        return response()->json($books);
    }
}
