<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $guests = Guest::orderBy('created_at', 'desc')->get();
        $total = $guests->count();
        $hadir = $guests->where('attendance', 'hadir')->count();
        $tidakHadir = $guests->where('attendance', 'tidak_hadir')->count();

        return view('admin.dashboard', compact('guests', 'total', 'hadir', 'tidakHadir'));
    }

    public function destroyGuest(Guest $guest)
    {
        $guest->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data tamu berhasil dihapus.');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}