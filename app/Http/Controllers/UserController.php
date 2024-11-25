<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User($request->validated());
        // Update the users with the form data
        $user->save();
        // Redirect to a view with a success message
        return redirect()->route('users.index')->with('status', 'Usuario creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param \App\Models\User $user
     * @param  int  $id
     */
    public function update(UpdateUserRequest $request, User $user, $id)
    {
        // Find the user by its ID
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password') ? bcrypt($request->input('password')) : $user->password;
        $user->state = $request->input('state');
        // Update the user with the form data
        $user->save();
        // Redirect to a view with a success message
        return redirect()->route('users.index')->with('status', 'Usuario actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @param  int  $id
     */
    public function destroy(User $user, $id)
    { 
        // Find the user by its ID
        $user = User::findOrFail($id);
        // Delete the user
        $user->delete();
        // Redirect to a view with a success message
        return redirect()->route('users.index')->with('status', 'Usuario eliminado exitosamente!');
    }
}
