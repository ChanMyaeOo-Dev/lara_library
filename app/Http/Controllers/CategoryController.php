<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact("categories"));
    }
    public function create()
    {
        //
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);
        $category->save();
        return redirect()->route('category.index')->with('message', 'Category has been added');
    }
    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->update();
        return redirect()->route('category.index')->with('message', 'Category has been updated');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category has been deleted.');
    }
}
