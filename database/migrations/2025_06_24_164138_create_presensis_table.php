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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan')->constrained('karyawans')->onDelete('cascade');
            $table->foreignId('id_jadwal')->constrained('jadwals')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('datang');
            $table->time('pulang')->nullable();
            $table->string('foto_datang');
            $table->string('foto_pulang')->nullable();
            $table->enum('status', ['hadir', 'terlambat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
