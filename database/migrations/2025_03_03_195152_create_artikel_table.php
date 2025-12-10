<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi.
     */
    public function up(): void {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('img', 255)->nullable();
            $table->text('sinopsis')->nullable();
            $table->text('link');
            $table->unsignedBigInteger('jurusan_id');
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();
        });

        // Tambahkan foreign key SETELAH tabel dibuat
        Schema::table('artikels', function (Blueprint $table) {
            $table->foreign('jurusan_id')
                  ->references('id')
                  ->on('jurusan')
                  ->onDelete('cascade');

            $table->foreign('kategori_id')
                  ->references('id')
                  ->on('kategori_artikel')
                  ->onDelete('cascade');
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void {
        Schema::dropIfExists('artikels');
    }
};
