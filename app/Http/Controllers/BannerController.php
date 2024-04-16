<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banner.index', compact("banners"));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner();
        $newName = uniqid() . '_banner_image.' . $request->file("image")->getClientOriginalExtension();
        $request->file("image")->storeAs("public", $newName);
        $banner->image = $newName;
        $banner->description = $request->description;
        $banner->save();
        return redirect()->route("banners.index")->with("message", "Banner Saved.");
    }
    public function show(Banner $banner)
    {
        //
    }
    public function edit(Banner $banner)
    {
        return view("admin.banner.edit", compact("banner"));
    }
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $old_image = $banner->image;
        if ($request->hasFile('image')) {
            if ($banner->image != "default_book_image.jpg") {
                Storage::delete("public/" . $banner->image);
            }
            $newName = uniqid() . '_banner_image.' . $request->file("image")->getClientOriginalExtension();
            $request->file("image")->storeAs("public", $newName);
            $banner->image = $newName;
        } else {
            $banner->image = $old_image;
        }
        $banner->description = $request->description;
        $banner->update();
        return redirect()->route("banners.index")->with("message", "Banner Updated.");
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image != "default_book_image.jpg") {
            Storage::delete("public/" . $banner->image);
        }
        $banner->delete();
        return redirect()->route("banners.index")->with("message", "Banner Deleted.");
    }
}
