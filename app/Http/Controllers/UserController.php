<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

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
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make("password");
        $user->save();
        return redirect()->route('users.index')->with("message", "New Member is successfully registered.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
