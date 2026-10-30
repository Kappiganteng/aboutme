<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
/*
|--------------------------------------------------------------------------
| Halaman Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Halaman Identitas
|--------------------------------------------------------------------------
*/

Route::get('/identitas', function () {
    return view('identitas');
});

/*
|--------------------------------------------------------------------------
| Halaman Visi
|--------------------------------------------------------------------------
*/


Route::get('/visi', function () {
    return view('visi');
});

Route::get('/misi', function () {
    return view('misi');
});

Route::get('/tentang', function () {
    return view('tentang');
});



// Route untuk membuka halaman Target.
// Laravel menampilkan file resources/views/target.blade.php.
Route::get('/target', function () {
    return view('target');
});

// Route untuk menampilkan halaman Progress.
// Laravel mengambil tampilan dari resources/views/progress.blade.php.
Route::get('/progress', function () {
    return view('progress');
});

Route::get('/adventure', function () {
    return view('adventure');
});

Route::get('/diary', [DiaryController::class, 'index'])
    ->name('diary.index');

Route::post('/diary', [DiaryController::class, 'store'])
    ->name('diary.store');
// ========================================
// FITUR PESAN ABOUTME
// ========================================

// Membuka formulir pesan
Route::get('/pesan', function () {
    return view('pesan');
})->name('conversation.create');

// Menyimpan pesan pertama pengunjung
Route::post('/pesan', [\App\Http\Controllers\ConversationController::class, 'store'])
    ->name('conversation.store');

// Membuka ruang percakapan
Route::get('/percakapan/{token}', [\App\Http\Controllers\ConversationController::class, 'show'])
    ->name('conversation.show');

// Mengirim pesan lanjutan
Route::post('/percakapan/{token}/pesan', [\App\Http\Controllers\MessageController::class, 'store'])
    ->name('messages.store');


// ========================================
// ADMIN ABOUTME
// ========================================

// Halaman login admin
Route::get('/admin/login', [
    \App\Http\Controllers\AdminAuthController::class,
    'create'
])->name('admin.login');

// Proses login admin
Route::post('/admin/login', [
    \App\Http\Controllers\AdminAuthController::class,
    'store'
])->name('admin.login.store');

// Dashboard khusus admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard Inbox
        Route::get('/inbox', [
            \App\Http\Controllers\AdminInboxController::class,
            'index'
        ])->name('inbox');

        // Detail percakapan
        Route::get('/inbox/{conversation}', [
            \App\Http\Controllers\AdminInboxController::class,
            'show'
        ])->name('conversations.show');

        // Balasan admin
        Route::post('/inbox/{conversation}/reply', [
            \App\Http\Controllers\MessageController::class,
            'reply'
        ])->name('messages.reply');

        // Logout
        Route::post('/logout', [
            \App\Http\Controllers\AdminAuthController::class,
            'destroy'
        ])->name('logout');
    });
