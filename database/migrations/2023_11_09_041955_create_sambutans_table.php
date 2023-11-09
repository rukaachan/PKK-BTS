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
        Schema::create('sambutan', function (Blueprint $table) {
            $table->integer('id_sambutan', true);
            $table->integer('kode_sekolah');
            $table->string('kepala_sekolah', 60);
            $table->string('wakil_kepala_sekolah', 60);
            $table->string('ketua_osis', 60);
            $table->text('foto_sambutan');

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
        Schema::dropIfExists('sambutan');
    }
};
