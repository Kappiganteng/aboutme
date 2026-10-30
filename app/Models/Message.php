<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = [
        'conversation_id',
        'sender',
        'body',
        'is_read',
    ];

    // Mengubah is_read menjadi true atau false
    protected $casts = [
        'is_read' => 'boolean',
    ];

    // Setiap pesan dimiliki satu percakapan
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }
}
