<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Desa Wisata.Main.user.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'email'    => 'required|email|max:100|unique:login_users,email',
        ]);

        // Simpan ke database
        \DB::table('login_users')->insert([
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']), // gunakan bcrypt untuk keamanan
            'email'    => $validated['email'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('register.create')->with('success', 'Registrasi berhasil!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
