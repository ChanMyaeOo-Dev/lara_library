<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.user.index', compact("users"));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'roll_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'role' => "required"
        ]);

        $user = new User();

        if ($request->hasFile('profile_picture')) {
            $newName = uniqid() . '_profile_picture.' . $request->file("profile_picture")->getClientOriginalExtension();
            $request->file("profile_picture")->storeAs("public", $newName);
            $user->profile_picture = $newName;
        } else {
            $user->profile_picture = "default_user.svg";
        }

        $user->name = $request->name;
        $user->roll_number = $request->roll_number;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make("password");
        $user->save();
        return redirect()->route('users.index')->with("message", "New Member is successfully registered.");
    }
    public function show($roll_number)
    {
        $user = User::where('roll_number', $roll_number)->first();
        $transactions = Transaction::where('user_id', $user->id)->where('is_returned', false)->get();
        $histories = Transaction::where('user_id', $user->id)->where('is_returned', true)->get();
        return view('admin.user.show', compact('user', 'transactions', "histories"));
    }
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'roll_number' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'phone' => [
                'required', 'string', 'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'role' => "required"
        ], [
            "phone" => "Phone Number must be unique."
        ]);

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture != "default_user.svg") {
                Storage::delete("public/" . $user->profile_picture);
            }
            $newName = uniqid() . '_profile_picture.' . $request->file("profile_picture")->getClientOriginalExtension();
            $request->file("profile_picture")->storeAs("public", $newName);
            $user->profile_picture = $newName;
        } else {
            $user->profile_picture = $request->old_profile_picture;
        }

        $user->name = $request->name;
        $user->roll_number = $request->roll_number;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make("password");
        $user->update();
        return redirect()->route('users.index')->with("message", "Successfully updated.");
    }


    public function destroy(User $user)
    {
        if ($user->profile_picture != "default_user.svg") {
            Storage::delete("public/" . $user->profile_picture);
        }
        $user->delete();
        return redirect()->route('users.index')->with("message", "Successfully deleted.");
    }
}
