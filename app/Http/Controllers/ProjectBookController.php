<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectBookRequest;
use App\Http\Requests\UpdateProjectBookRequest;
use App\Models\ProjectBook;
use App\Models\Book;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = ProjectBook::latest()->get();
        return view('admin.projectBooks.index', compact("books"));
    }
    public function create()
    {
        return view('admin.projectBooks.create');
    }
    public function store(StoreProjectBookRequest $request)
    {
        $projectBook = new ProjectBook();

        if ($request->hasFile('cover_image')) {
            $newName = uniqid() . '_cover_image.' . $request->file("cover_image")->getClientOriginalExtension();
            $request->file("cover_image")->storeAs("public", $newName);
            $projectBook->cover_image = $newName;
        } else {
            $projectBook->cover_image = "default_book_image.jpg";
        }

        $projectBook->title = $request->title;
        $projectBook->slug = Str::slug($request->title);

        $projectBook->description = $request->description;
        $projectBook->excerpt = Str::excerpt($request->description);

        $projectBook->link = $request->link;
        $projectBook->category = $request->category;
        $projectBook->save();
        return redirect()->route('project-books.index')->with("message", "New Book has been successfully added.");
    }
    public function show($slug)
    {
        $book = ProjectBook::where('slug', $slug)->firstOrFail();
        return view("admin.projectBooks.show", compact("book"));
    }

    public function edit(ProjectBook $projectBook)
    {
        return view('admin.projectBooks.edit', compact('projectBook'));
    }

    public function update(UpdateProjectBookRequest $request, ProjectBook $projectBook)
    {
        if ($request->hasFile('cover_image')) {
            $newName = uniqid() . '_cover_image.' . $request->file("cover_image")->getClientOriginalExtension();
            $request->file("cover_image")->storeAs("public", $newName);
            $projectBook->cover_image = $newName;
        } else {
            $projectBook->cover_image = $request->old_cover_image;
        }

        $projectBook->title = $request->title;
        $projectBook->slug = Str::slug($request->title);

        $projectBook->description = $request->description;
        $projectBook->excerpt = Str::excerpt($request->description);

        $projectBook->link = $request->link;
        $projectBook->category = $request->category;
        $projectBook->update();
        return redirect()->route('project-books.index')->with("message", "Successfully updated.");
    }
    public function destroy(ProjectBook $projectBook)
    {
        if ($projectBook->cover_image != "default_book_image.jpg") {
            Storage::delete("public/" . $projectBook->cover_image);
        }
        $projectBook->delete();
        return redirect()->route('project-books.index')->with("message", "Deleted successfully.");
    }
}
