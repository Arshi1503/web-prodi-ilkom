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
        Schema::create('pimpinan_staff', function (Blueprint $table) {
            $table->id();
            $table->text('foto');
            $table->enum('status', ['Kepala Program Studi Administrasi Bisnis', 'Dosen', 'Staf']);
            $table->text('nama');
            $table->text('kata_sambutan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pimpinan_staff');
    }
};