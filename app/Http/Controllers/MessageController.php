<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    // Menyimpan pesan lanjutan dari pengunjung
    public function store(Request $request, string $token): RedirectResponse
    {
        // Memeriksa isi pesan
        $validated = $request->validate([
            'pesan' => 'required|string|max:5000',
        ]);

        // Mencari percakapan berdasarkan token rahasia
        $conversation = Conversation::where(
            'access_token',
            $token
        )->firstOrFail();

        // Menyimpan pesan dari pengunjung
        $conversation->messages()->create([
            'sender' => 'visitor',
            'body' => $validated['pesan'],
            'is_read' => false,
        ]);

        // Kembali ke halaman percakapan
        return redirect()
            ->route('conversation.show', ['token' => $token])
            ->with('success', 'Pesan berhasil dikirim!');
    }

    // Menyimpan balasan dari admin
    public function reply(Request $request, int $conversationId): RedirectResponse
    {
        // Memastikan admin sudah login
        abort_unless(auth()->check(), 403);

        // Memeriksa isi balasan
        $validated = $request->validate([
            'pesan' => 'required|string|max:5000',
        ]);

        // Mencari percakapan
        $conversation = Conversation::findOrFail($conversationId);

        // Menyimpan balasan admin
        $conversation->messages()->create([
            'sender' => 'admin',
            'body' => $validated['pesan'],
            'is_read' => false,
        ]);

        // Kembali ke kotak masuk
        return redirect()
            ->route('admin.conversations.show', [
                'conversation' => $conversation->id,
            ])
            ->with('success', 'Balasan berhasil dikirim!');
    }
}
