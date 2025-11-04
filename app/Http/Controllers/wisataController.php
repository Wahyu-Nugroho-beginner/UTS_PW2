<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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

    public function showProduk($param = null)
    {
        $produks = DB::table('produks')->get();
        return view('desa wisata.main.daftar produk_store.store', ['produks' => $produks]);
    }

    public function checkout()
    {
        $produks = DB::table('produks')->get();
        return view('desa wisata.main.daftar produk_store.checkout', ['produks' => $produks]);
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
            session()->regenerate(); // Regenerate session ID untuk keamanan
            session(['user_id' => $user->id, 'username' => $user->username]);
            // redirect to index2 with success message
            return redirect()->route('home.index2')->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    /**
     * Display the user's profile.
     */
    public function profile()
    {
        $user = \DB::table('login_users')->where('id', session('user_id'))->first();
        if (!$user) {
            return redirect()->route('login');
        }
        return view('Desa Wisata.akun', compact('user'));
    }

    /**
     * Show the form for editing the user's profile.
     */
    public function editProfile()
    {
        $user = \DB::table('login_users')->where('id', session('user_id'))->first();
        if (!$user) {
            return redirect()->route('login');
        }
        return view('Desa Wisata.edit-akun', compact('user'));
    }

    /**
     * Update the user's profile.
     */
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:login_users,email,' . session('user_id'),
            'username' => 'required|string|max:50|unique:login_users,username,' . session('user_id'),
        ]);

        \DB::table('login_users')
            ->where('id', session('user_id'))
            ->update([
                'email' => $validated['email'],
                'username' => $validated['username'],
                'updated_at' => now(),
            ]);

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Handle user logout.
     */
    public function logout()
    {
        session()->forget(['user_id', 'username']);
        return redirect()->route('login')->with('success', 'Berhasil logout!');
    }
}
