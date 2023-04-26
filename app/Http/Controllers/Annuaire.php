<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class Annuaire extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('annuaire',[
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required','email','unique:users,email'],
            'nom' => ['required'],
            'postnom' => ['required'],
            'fonction' => ['required'],
            'phone' => ['required'],
            'description' => ['required'],
            'file' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );

        User::create([
            'firstname' => $request->nom,
            'lastname' => $request->postnom,
            'fonction' => $request->fonction,
            'email' => $request->email,
            'isadmin' => 0,
            'file' => $path,
            'description' => $request->description,
            'isadminannuaire' => 0,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('edit',[
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => ['required','email','unique:users,email'],
            'nom' => ['required'],
            'postnom' => ['required'],
            'fonction' => ['required'],
            'phone' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
            'description' => ['required'],
            'file' => ['required']
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
        $user = User::findOrFail($id);
        $user->update([
            'firstname' => $request->nom,
            'lastname' => $request->postnom,
            'fonction' => $request->fonction,
            'email' => $request->email,
            'file' => $path,
            'description' => $request->description,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
