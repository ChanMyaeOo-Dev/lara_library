<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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
    public function index()
    {
        $banners = Banner::latest()->get();
        $project_books = ProjectBook::latest()->take(6)->get();
        $latest_arrival = Book::latest()->take(6)->get();
        $categories = Category::latest()->take(6)->get();
        $popular_books = Book::select('id', 'slug', 'title', 'book_image')
            ->withCount('transactions')
            ->orderByDesc('transactions_count')
            ->limit(5)
            ->get();
        return view('home', compact("banners", "project_books", "latest_arrival", "categories", "popular_books"));
    }

    public function banner_detail($id)
    {
        $banner = Banner::findOrFail($id);
        $banners = Banner::latest()->get();

        return view("banner_detail", compact("banners", "banner"));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $books = Book::where('title', 'like', "%$query%")->get();
        $project_books = ProjectBook::where('title', 'like', "%$query%")->get();

        $mergedResults = $books->merge($project_books);

        return response()->json($mergedResults);
    }

    public function bookShow($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        if (Auth::user() == null) {
            return view('show', compact("book"));
        }
        $user = Auth::user();
        $bookmark = $user->bookmarks()->where('book_id', $book->id)->first();
        $wishlist = $user->wishlists()->where('book_id', $book->id)->first();
        return view('show', compact("book", "bookmark", "wishlist"));
    }

    public function projectBookShow($slug)
    {
        $book = ProjectBook::where('slug', $slug)->firstOrFail();
        $related_books = ProjectBook::where('category', $book->category)->take(6)->get();
        if (count($related_books) < 4) {
            $related_books = ProjectBook::latest()->take(6)->get();
        }
        return view('project_book_show', compact("book", "related_books"));
    }
    public function books($slug)
    {
        $categories = Category::all();
        $books = "";
        if ($slug == "all") {
            $books = Book::paginate(18);
        } else {
            $category = Category::where("slug", $slug)->firstOrFail();
            $books = Book::where("category_id", $category->id)->paginate(18);
        }
        return view('books', compact("categories", "books"));
    }


    public function project_books()
    {
        $books = ProjectBook::paginate(12);
        return view('project_books', compact("books"));
    }
}
