<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    // Menampilkan halaman login Admin
    public function create(): View
    {
        return view('admin.login');
    }

    // Memproses login Admin
    public function store(Request $request): RedirectResponse
    {
        // Validasi email dan password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Hanya akun Admin yang boleh login
        if (!Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'is_admin' => true,
        ], $request->boolean('remember'))) {

            return back()
                ->withErrors([
                    'email' => 'Email atau password salah, atau akun bukan Admin.',
                ])
                ->onlyInput('email');
        }

        // Memperbarui session setelah login
        $request->session()->regenerate();

        // Mengarahkan Admin ke Inbox
        return redirect()->intended(route('admin.inbox'));
    }

    // Logout Admin
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('success', 'Kamu berhasil logout.');
    }
}
