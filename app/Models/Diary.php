<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'title',
        'entry_date',
        'mood',
        'content',
    ];

    protected $casts = [
        'entry_date' => 'date',
    ];
}