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
        Schema::create('jadwal_penerimaans', function (Blueprint $table) {
            $table->id();
            $table->text('teks');
            $table->date('pendaftaran_sampai_dengan');
            $table->date('tes');
            $table->date('pengumuman_hasil_tes');
            $table->date('masa_orientasi');
            $table->date('perkuliahan_perdana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_penerimaans');
    }
};