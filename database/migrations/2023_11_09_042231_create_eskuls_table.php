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
        Schema::create('eskul', function (Blueprint $table) {
            $table->integer('id_eskul', true);
            $table->integer('kode_sekolah');
            $table->string('nama_eskul', 30);
            $table->string('deskripsi_eskul', 100);
            $table->text('foto_eskul');

            // Foreign Key

            $table->foreign('kode_sekolah')->on('sekolah')
                ->references('kode_sekolah')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eskul');
    }
};
