<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $books = Book::latest()->get();
        $userCount = User::count();
        $transactionCount = Transaction::count();
        $categoryCount = Category::count();
        return view('admin.dashboard.index', compact('books', 'userCount', 'categoryCount', 'transactionCount'));
    }
}
