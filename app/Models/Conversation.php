<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'email',
        'access_token',
    ];

    // Satu percakapan memiliki banyak pesan
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
