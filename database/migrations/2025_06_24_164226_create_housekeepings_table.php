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
        Schema::create('housekeepings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan')->constrained('karyawans')->onDelete('cascade');
            $table->foreignId('id_tempat')->constrained('tempats')->onDelete('cascade');
            $table->date('tanggal');
            $table->enum('sop', ['check in', 'check out']);
            $table->enum('kamar_mandi', ['sop 1', 'sop 2', 'sop 3', 'sop 4', 'sop 5']);
            $table->enum('ruang_kamar', ['sop 1', 'sop 2', 'sop 3', 'sop 4', 'sop 5']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housekeepings');
    }
};
