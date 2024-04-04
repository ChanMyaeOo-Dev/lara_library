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

use function PHPUnit\Framework\isEmpty;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->get();
        return view('admin.transition.index', compact('transactions'));
    }
    public function create(Request $request)
    {
        $user = User::find($request->user_id);
        $carts = Cart::all();
        if ($user === null) {
            return redirect()->back()->with("error_message", "Invalid User Id.");
        }
        $setting = Setting::first();
        $date_create = Carbon::now()->addDays($setting->borrowing_duration);
        $due_date = $date_create->format('d/m/Y');
        return view("admin.transition.create", compact('carts', 'user', 'setting', 'due_date'));
    }
    public function store(StoreTransactionRequest $request)
    {
        $user_id = $request->user_id;
        $duration = $request->duration;
        $due_date = $request->due_date;
        $is_returned = false;
        $returned_at = null;
        $carts = Cart::all();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
