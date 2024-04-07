<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use function PHPSTORM_META\map;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transactions = Transaction::latest()->get();
        return view('admin.transition.index', compact('transactions'));
    }
    public function create(Request $request)
    {
        $user = User::where("roll_number", $request->roll_number)->first();
        if ($user === null) {
            return redirect()->back()->with("error_message", "Invalid Roll Number.");
        }
        // If the user exist
        $user_current_book_ids = Transaction::where('user_id', $user->id)->where("is_returned", "=", false)->pluck('book_id');
        $acceptCarts = Cart::whereNotIn('book_id', $user_current_book_ids)->get();
        $rejectCarts = Cart::whereIn('book_id', $user_current_book_ids)->get();
        if (count($acceptCarts) === 0) {
            return redirect()->back()->with("error_message", "The user have already rented that books.");
        }
        $setting = Setting::first();
        $date_create = Carbon::now("Asia/Yangon")->addDays($setting->borrowing_duration);
        $due_date = $date_create->format('Y-m-d');
        return view("admin.transition.create", compact('acceptCarts', 'rejectCarts', 'user', 'setting', 'due_date'));
    }
    public function store(StoreTransactionRequest $request)
    {
        $user_id = $request->user_id;

        $user_current_book_ids = Transaction::where('user_id', $user_id)->where("is_returned", "=", false)->pluck('book_id');
        $carts = Cart::whereNotIn('book_id', $user_current_book_ids)->get();

        $duration = $request->duration;
        $due_date = $request->due_date;
        $is_returned = false;
        $returned_at = null;
        foreach ($carts as $cart) {
            $transition = new Transaction();
            $transition->book_id = $cart->book_id;
            $transition->user_id = $user_id;
            $transition->duration = $duration;
            $transition->due_date = $due_date;
            $transition->is_returned = $is_returned;
            $transition->returned_at = $returned_at;
            $transition->save();
            $book = Book::find($cart->book_id);
            $book->qty = ($book->qty - 1);
            $book->update();
        }
        Cart::truncate();
        return redirect()->route('books.index')->with("message", "Successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }
    public function edit(Transaction $transaction)
    {
    }
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $transaction->is_returned = true;
        $transaction->returned_at = Carbon::now("Asia/Yangon")->format("Y-m-d");
        $transaction->update();
        $book = Book::find($transaction->book_id);
        $book->qty = ($book->qty + 1);
        $book->update();
        return redirect()->back()->with("message", "Successfully updated the transaction.");
    }
    public function destroy(Transaction $transaction)
    {
        $book = Book::find($transaction->book_id);
        $book->qty = ($book->qty + 1);
        $book->update();
        $transaction->delete();
        return redirect()->back()->with("message", "Successfully deleted the transaction.");
    }
}
