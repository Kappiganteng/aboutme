
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Menambahkan kolom pesan
        Schema::table('messages', function (Blueprint $table) {

            // Menghubungkan pesan dengan percakapan
            $table->foreignId('conversation_id')
                ->constrained('conversations')
                ->cascadeOnDelete();

            // Menentukan pengirim pesan
            $table->enum('sender', ['visitor', 'admin']);

            // Menyimpan isi pesan
            $table->text('body');

            // Status pesan sudah dibaca atau belum
            $table->boolean('is_read')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['conversation_id']);

            $table->dropColumn([
                'conversation_id',
                'sender',
                'body',
                'is_read',
            ]);
        });
    }
};
