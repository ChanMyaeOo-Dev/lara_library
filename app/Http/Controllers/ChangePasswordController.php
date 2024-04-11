<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('change_password', compact("user"));
    }
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:6'],
        ], [
            'current_password.required' => 'The current password field is required.',
            'new_password.required' => 'The new password field is required.',
            'new_password.min' => 'The new password must be at least :min characters.',
        ]);
        $user = Auth::user();
        $current_password = $request->current_password;
        $new_password = $request->new_password;

        if (Hash::check($current_password, $user->password)) {
            $user->password = Hash::make($new_password);
            $user->update();
            return redirect()->route('/')->with("message", "Password Updated.");
        } else {
            return redirect()->back()->with("error_message", "Current Password is not correct.");
        }
    }
}
