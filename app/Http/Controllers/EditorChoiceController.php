<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditorChoiceRequest;
use App\Http\Requests\UpdateEditorChoiceRequest;
use App\Models\EditorChoice;

class EditorChoiceController extends Controller
{
    public function index()
    {
        $editorChoices = EditorChoice::all();
        return view('admin.editor_choice.index', compact("editorChoices"));
    }
    public function store(StoreEditorChoiceRequest $request)
    {
        $editorChoice = new EditorChoice();
        $editorChoice->book_id = $request->book_id;
        $editorChoice->save();
        return redirect()->back()->with("message", "Added to editor choice.");
    }
    public function destroy(EditorChoice $editorChoice)
    {
        $editorChoice->delete();
        return redirect()->back()->with("message", "Deleted.");
    }
}
