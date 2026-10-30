<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Menambahkan identitas pengunjung
        Schema::table('conversations', function (Blueprint $table) {
            $table->string('nama', 100);
            $table->string('email', 255);
            $table->string('access_token', 64)->unique();
        });
    }

    public function down(): void
    {
        // Menghapus kolom jika Migration dibatalkan
        Schema::table('conversations', function (Blueprint $table) {
            $table->dropUnique(['access_token']);

            $table->dropColumn([
                'nama',
                'email',
                'access_token',
            ]);
        });
    }
};
