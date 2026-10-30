<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ConversationController extends Controller
{
    // Menyimpan pesan pertama pengunjung
    public function store(Request $request): RedirectResponse
    {
        // Memvalidasi data pengunjung
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string|max:5000',
        ]);

        // Menyimpan percakapan dan pesan sekaligus
        $conversation = DB::transaction(function () use ($validated) {

            // Membuat percakapan baru
            $conversation = Conversation::create([
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'access_token' => bin2hex(random_bytes(32)),
            ]);

            // Menyimpan pesan pertama
            $conversation->messages()->create([
                'sender' => 'visitor',
                'body' => $validated['pesan'],
                'is_read' => false,
            ]);

            return $conversation;
        });

        // Mengarahkan pengunjung ke ruang percakapan
        return redirect()->route(
            'conversation.show',
            ['token' => $conversation->access_token]
        )->with('success', 'Pesan berhasil dikirim!');
    }

    // Menampilkan ruang percakapan
    public function show(string $token): View
    {
        // Mencari percakapan berdasarkan token
        $conversation = Conversation::where('access_token', $token)
            ->with(['messages' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->firstOrFail();

        // Membuka halaman percakapan
        return view('percakapan', compact('conversation'));
    }
}
