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
        Schema::create('tata_usaha', function (Blueprint $table) {
            $table->integer('id_tata_usaha', true);
            $table->integer('kode_sekolah');
            $table->string('nama_tata_usaha', 60);
            $table->text('foto_tata_usaha');
            
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
        Schema::dropIfExists('tata_usaha');
    }
};
