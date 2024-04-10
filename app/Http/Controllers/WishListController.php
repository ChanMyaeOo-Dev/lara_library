<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWishListRequest;
use App\Http\Requests\UpdateWishListRequest;
use App\Models\WishList;

class WishListController extends Controller
{
    public function index()
    {
        $wishlists = WishList::latest()->get();
        return view('wishlist.index', compact('wishlists'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishListRequest  $request
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWishListRequest $request, WishList $wishList)
    {
        //
    }
    public function destroy(WishList $wishlist)
    {
        $wishlist->delete();
        return redirect()->back()->with("message", "Successfully remove from wishlist.");
    }
}
