<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy("id", "desc")->get();
        return view('admin.feedback.index', compact("feedbacks"));
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy($id)
    {
        $data = Feedback::findOrFail($id);
        $data->delete();
        return redirect()->back()->with("message", "Deleted.");
    }
}
