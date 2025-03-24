<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kampuses', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->text('gambar');
            $table->text('deskripsi');
            $table->text('alamat');
            $table->text('nomor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampuses');
    }
};