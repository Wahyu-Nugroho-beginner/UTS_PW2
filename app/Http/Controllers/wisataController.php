<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WisataController extends Controller
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
        // This controller expects a slug like 'kebun-teh', 'gunung-kerinci', etc.
        $slug = $id;

        // map slug to view file under resources/views/Desa Wisata/Main/wisata/
        $viewBase = 'Desa Wisata.Main.wisata.';
        $viewName = $viewBase . $slug;

        if (View::exists($viewName)) {
            return view($viewName);
        }
        // fallback: 404
        abort(404);
    }

    /**
     * Display the specified fasilitas page.
     */
    public function showFasilitas(string $slug)
    {
        // map slug to view file under resources/views/Desa Wisata/Main/Fasilitas/
        $viewBase = 'Desa Wisata.Main.Fasilitas.';
        $viewName = $viewBase . $slug;

        if (View::exists($viewName)) {
            return view($viewName);
        }
        // fallback: 404
        abort(404);
    }

    public function showProduk()
    {
        return view('Desa Wisata.Main.daftar produk_store.store');
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

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('Desa Wisata.Main.user.login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        $user = \DB::table('login_users')->where('username', $request->username)->first();

        if ($user && \Hash::check($request->password, $user->password)) {
            session(['user_id' => $user->id, 'username' => $user->username]);
            // return the index2 view on successful login
            return view('Desa Wisata.index2')->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Username atau password salah!');
    }
}
