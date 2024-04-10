<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $books = Book::latest()->get();
        $transactions = Transaction::latest()->get();
        $userCount = User::count();
        $transactionCount = Transaction::count();
        $categoryCount = Category::count();

        $categoryBookCount = Book::join('categories', 'books.category_id', '=', 'categories.id')
            ->select('categories.title', DB::raw('count(*) as book_count'))
            ->groupBy('categories.title')
            ->pluck('book_count', 'title');

        $transactionCountsInLastSixMonth = [];
        for ($i = 0; $i < 6; $i++) {
            // Get the date for the start of the current month
            $startDate = Carbon::now()->subMonths($i)->startOfMonth();
            // Get the date for the end of the current month
            $endDate = Carbon::now()->subMonths($i)->endOfMonth();

            $transaction = Transaction::whereBetween('created_at', [$startDate, $endDate])->count();
            $transactionCountsInLastSixMonth[$startDate->format('M')] = $transaction;
        }

        return view('admin.dashboard.index', compact('books', 'categoryBookCount',  'userCount', 'categoryCount', 'transactions', 'transactionCount', 'transactionCountsInLastSixMonth'));
    }
}
