<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\ProjectBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $project_books = ProjectBook::latest()->take(6)->get();
        $latest_arrival = Book::latest()->take(6)->get();
        $categories = Category::latest()->take(6)->get();
        $popular_books = Book::select('id', 'slug', 'title', 'book_image')
            ->withCount('transactions')
            ->orderByDesc('transactions_count')
            ->limit(5)
            ->get();
        return view('home', compact("project_books", "latest_arrival", "categories", "popular_books"));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $books = Book::where('title', 'like', "%$query%")->get();

        return response()->json($books);
    }

    public function projectBookShow($slug)
    {
        $book = ProjectBook::where('slug', $slug)->firstOrFail();
        return view('project_book_show', compact("book"));
    }
}
