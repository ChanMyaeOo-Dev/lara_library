<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact("users"));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        // $user = new User();
        // $newName = uniqid() . '_profile_picture.' . $request->file("profile_picture")->getClientOriginalExtension();
        // $request->file("profile_picture")->storeAs("public", $newName);
        // $user->_profile_picture = $newName;

        // $user->name = $request->name;
        // $user->phone = $request->phone;
        // $user->email = $request->email;
        // $user->password = Hash::make("password");
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
