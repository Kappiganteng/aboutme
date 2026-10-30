<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\View\View;

class AdminInboxController extends Controller
{
    // Menampilkan seluruh pesan masuk
    public function index(): View
    {
        // Mengambil semua percakapan beserta pesannya
        $conversations = Conversation::with([
            'messages' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }
        ])
        ->withCount('messages')
        ->orderByDesc('id')
        ->get();

        // Menghitung jumlah percakapan
        $totalConversations = Conversation::count();

        // Menghitung seluruh pesan
        $totalMessages = Message::count();

        // Menghitung pesan pengunjung yang belum dibaca
        $unreadMessages = Message::where('sender', 'visitor')
            ->where('is_read', false)
            ->count();

        return view('admin.inbox', compact(
            'conversations',
            'totalConversations',
            'totalMessages',
            'unreadMessages'
        ));
    }

    // Membuka detail percakapan
    public function show(int $conversationId): View
    {
        // Mencari percakapan
        $conversation = Conversation::findOrFail($conversationId);

        // Menandai pesan pengunjung sebagai sudah dibaca
        $conversation->messages()
            ->where('sender', 'visitor')
            ->where('is_read', false)
            ->update(['is_read' => true]);

        // Mengambil ulang pesan setelah status diperbarui
        $conversation->load([
            'messages' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }
        ]);

        return view('admin.conversation', compact('conversation'));
    }
}
