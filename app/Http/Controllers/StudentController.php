<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function show($roll_number)
    {
        $user = User::where('roll_number', $roll_number)->first();
        return view('profile', compact("user"));
    }
    public function edit($roll_number)
    {
        $user = User::where('roll_number', $roll_number)->first();
        return view('profile_edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();
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
        return redirect()->route('/')->with("message", "Successfully updated.");
    }
    public function destroy(User $user)
    {
        //
    }
}
