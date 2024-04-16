<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWishListRequest;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index()
    {
        $wishlists = WishList::where("user_id", Auth::id())->paginate(10);
        return view('wishlist.index', compact('wishlists'));
    }
    public function store(StoreWishListRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required|unique:wish_lists,book_id,NULL,id,user_id,' . $request->user_id
        ]);
        $wishlist = new WishList();
        $wishlist->user_id = $request->user_id;
        $wishlist->book_id = $request->book_id;
        $wishlist->save();
        return redirect()->back()->with("message", "Successfully added to wish list.");
    }
    public function destroy(Request $request)
    {
        $wishlist = WishList::findOrFail($request->id);
        $wishlist->delete();
        return redirect()->back()->with("message", "Successfully remove from wishlist.");
    }
}
